<?php 

class Views_model extends CI_Model {

    public function add_view()
    {
        $views = $this->db->query('SELECT quantity_views FROM views where id=1')->row()->quantity_views;
        $this->db->set('quantity_views', $views + 1, FALSE);
        $this->db->where('id', 1);
        $this->db->update('views');
    }
    
    public function get_quantity_views()
    {
        return $this->db->query('SELECT quantity_views FROM views where id=1')->row()->quantity_views;
    }

}