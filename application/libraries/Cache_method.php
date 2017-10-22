<?php

class Cache_method {

	public function get($model, $fn, $cache, $parm='', $cache_method = false)
    {
        $ci = &get_instance();
        if($cache_method == true) {
            $ci->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));
            if ( ! $data = $ci->cache->get($cache))
            {
                $ci->load->model($model);
                $data = $ci->$model->$fn($parm);
                $ci->cache->save($cache, $data, 300);
            }
        } else {
            $ci->load->model($model);
            $data = $ci->$model->$fn($parm);
        }

        return $data;
	}

    public function clearCache($parm)
    {
        $ci = &get_instance();
        $ci->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));
        foreach ($parm as $row) {
            $ci->cache->delete($row);
        }
    }

}
