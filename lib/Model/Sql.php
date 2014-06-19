<?php
//starting information for connecting/dealing with the database

class Model_Sql
{

    public function selectAll()
    {
        //mysql table names in `tic marks`
        $query = 'SELECT * FROM `'.$this->table.'`';
        return $this->query($query);
    }

    public function select($id)
    {
        //select all from table where id
        $query = 'SELECT * FROM `'.$this->table.'` WHERE `id` = \'
         '.mysql_real_escape_string($id).'\'';
        return $this->query($query);
    }





}