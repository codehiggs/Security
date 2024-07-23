<?php

namespace App\Modules\Security\Models;

use Higgs\Model;

class Security_Hierarchies extends Model
{

    protected $table = "security_hierarchies";
    protected $primaryKey = "hierarchy";
    protected $returnType = "array";
    protected $useSoftDeletes = false;
    protected $allowedFields = ["hierarchy", "user", "rol", "author"];
    protected $useTimestamps = true;
    protected $createdField = "created_at";
    protected $updatedField = "updated_at";
    protected $deletedField = "deleted_at";
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $DBGroup = "authentication";
    protected $cache_time = 60;
    protected $version = "1.0.0";


    /**
     * Retorna todos los roles desempeñados por un usuario
     * @param $user
     * @return \Higgs\Cache\CacheInterface|array|mixed
     */
    public function get_HierarchiesByUser($user = null)
    {
        $cache_key = $this->get_CacheKey("hierarchies-{$user}");
        if (!$data = cache($cache_key)) {
            $data = $this->where('user', $user)->findAll();
            cache()->save($cache_key, $data, $this->cache_time);
        }
        return $data;
    }

    protected function get_CacheKey($id)
    {
        $id = is_array($id) ? implode("", $id) : $id;
        $node = APPNODE;
        $table = $this->table;
        $class = urlencode(get_class($this));
        $version = $this->version;
        $key = "{$node}-{$table}-{$class}-{$version}-{$id}";
        return md5($key);
    }

    public function set_Hierarchy($user, $rol)
    {
        $this->insert(array(
            "hierarchy" => pk(),
            "user" => $user,
            "rol" => $rol,
            "author" => safe_get_user(),
        ));
        $cache_key = $this->get_CacheKey("hierarchies-{$user}");
        cache()->delete($cache_key);
    }

    public function insert($data = null, bool $returnID = true)
    {
        $result = parent::insert($data, $returnID);
        if ($result === true || $returnID && is_numeric($result)) {
            $cache_key = $this->get_CacheKey($this->db->insertID());
            $data = parent::find($this->db->insertID());
            cache()->save($cache_key, $data, $this->cache_time);
        }

        return $result;
    }

    public function find($id = null)
    {
        $cache_key = $this->get_CacheKey($id);
        if (!$data = cache($cache_key)) {
            $data = parent::find($id);
            cache()->save($cache_key, $data, $this->cache_time);
        }
        return $data;
    }

    public function delete($id = null, $purge = false)
    {
        $result = parent::delete($id, $purge);
        if ($result === true) {
            cache()->delete($this->get_CacheKey($id));
        }
        return ($result);
    }

    public function delete_Hierarchy($user = null, $rol = null)
    {
        $this->where('user', $user)->where('rol', $rol)->delete();
        $cache_key = $this->get_CacheKey("hierarchies-{$user}");
        cache()->delete($cache_key);
    }

    /**
     * Retorna falso o verdadero si el usuario activo ne la sesión es el
     * autor del regsitro que se desea acceder, editar o eliminar.
     * @param type $id codigo primario del registro a consultar
     * @param type $author codigo del usuario del cual se pretende establecer la autoria
     * @return boolean falso o verdadero segun sea el caso
     */
    public function delete_AllByUser($user)
    {
        $row = $this->where("user", $user)->delete();
        if ($row) {
            return (true);
        } else {
            return (false);
        }
    }

    public function update($id = null, $data = null): bool
    {
        $result = parent::update($id, $data);

        if ($result === true) {
            $cache_key = $this->get_CacheKey($id);
            $data = parent::find($id);
            cache()->save($cache_key, $data, $this->cache_time);
        }
        return ($result);
    }

    /**
     * Este método verifica si la tabla especificada existe en la base de datos utilizando la función tableExists()
     * del objeto db de CodeIgniter. Además, utiliza la caché para almacenar el resultado de la verificación para mejorar
     * el rendimiento y evitar la sobrecarga de la base de datos. La clave de caché se crea utilizando el método
     * get_CacheKey(), que se supone que retorna una clave única para la tabla especificada. El tiempo de duración de
     * la caché se establece en el atributo $cache_time.
     * @param $tableName
     * @return \Higgs\Cache\CacheInterface|bool|mixed
     */
    private function tableExists($tableName)
    {
        $cache_key = '_table_exist_' . APPNODE . '_' . $this->table;
        if (!$data = cache($cache_key)) {
            $data = $this->db->tableExists($tableName);
            cache()->save($cache_key, $data, $this->cache_time * 1000);
        }
        return ($data);
    }

}

?>