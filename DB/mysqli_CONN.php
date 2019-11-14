<?php

class DB {

    function multi_query($query)
    {
        return @mysqli_multi_query($this->db,$query) or die( ( $this->debug ) ? mysqli_error( $this->db ) : "Error : excute multi query" ) ;
    }

    function getMultiArray($sql)
    {

        $isResult = $this->multi_query($sql) ;

        if( $isResult )
        {
            $pack = Array() ;
            $multiNum = 0 ;

            do
            {
                if ($this->result = $this->db->store_result())
                {
                    $set = Array() ;
                    $i = 0 ;
                    while( $row = $this->next_row() )
                    {
                        $set[$i] = $row ;
                        $i ++ ;
                    }

                    $this->result->close();

                    $pack[$multiNum] = $set ;
                    $multiNum ++ ;
                }
            }
            while( $this->next_result() );
        }

//			$this->db->close();

        return $pack ;

    }
}


?>