<?php


class RecordTableSeeder extends Seeder {

  public function run() {

 DB::statement('delete from records');
 DB::statement('ALTER TABLE records AUTO_INCREMENT = 1');
    $data=array();
for($x=1;$x<10001;$x++){
 $data[] = array('id'=>$x,
     'created_at'=>date('Y-m-d H:i:s'));
}
    DB::table('records')->insert($data);
  }

}

?>
