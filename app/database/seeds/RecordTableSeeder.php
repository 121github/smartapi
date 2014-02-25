<?php


class RecordTableSeeder extends Seeder {

  public function run() {

    DB::table('records')->delete();
    
    $data=array();
for($x=1;$x<101;$x++){
 $data[] = array('id'=>$x,
     'created_at'=>date('Y-m-d H:i:s'));
}
    DB::table('records')->insert($data);
  }

}

?>
