<?php  //@var $this Controller; require(

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
    <h4><p>Entidad: <?php print_r( Yii::app()->user->name);?></p></h4>
    
    <div class="ac_results">
<?php  

/*
$connection=new CDbConnection($dsn,$username,$password);
// establish connection. You may try...catch possible exceptions
$connection->active=true;
$command=$connection->createCommand($sql);
$sql="SELECT username, email FROM users";
$dataReader=$connection->createCommand($sql)->query();
// vincular la 1er columna (username) con la variable $username
$dataReader->bindColumn(1,$username);
// vincular la 2da columna (email) con la variable $email
$dataReader->bindColumn(2,$email);
while($dataReader->read()!==false)
{
    // $username e $email contienen el nombre de usuaario y el email de la fila actual
}
 * 
 public function getItems($menu_id, $parent_id=null)
{
        $results = Yii::app()->getDb()->createCommand();
        $results->select('item_id, label, url')->from('{{menu_item}}');
 
        if($parent_id === null)
                $results->where('menu_id=:mid AND parent_id IS NULL', array(':mid'=>(int)$menu_id));
        else
                $results->where('menu_id=:mid AND parent_id=:pid', array(':mid'=>(int)$menu_id, ':pid'=>$parent_id));
 
        $results->order('sort_order ASC, label ASC');
        $results = $results->queryAll();
 
        $items = array();
 
        if(empty($results))
                return $items;
 
        foreach($results AS $result)
        {
            $childItems=$this->getItems($menu_id, $result['item_id']); 
            $items[] = array(
               'label'         => $result['label'],
               'url'           => $result['url'],
               'itemOptions'   =>  array('class'=>'listItem'),
               'linkOptions'   =>  array('class'=>'listItemLink', 'title'=>$result['label']),
               'submenuOptions'=> array(),
               'items'         => $childItems, 
             );
        }
 
        return $items;* 
 
 * 
 * 
 * 
 * 
 */





?>
</div>
    
<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php 
                
                $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			
                             //if(Yii::app()->user->name!=NULL){array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)}
                            ),
		)); 
                 
$nivel1 = array();
 $nivel2 = array();
     
if( Yii::app()->user->name!=NULL && Yii::app()->user->name!='Guest'){
    

 
###NIVEL 1 
$sql="Select * from mainmodules where entidad='01' order by name";            
$connection=Yii::app()->db;   // assuming you have configured a "db" connection
// If not, you may explicitly create a connection:
// $connection=new CDbConnection($dsn,$username,$password);
$command=$connection->createCommand($sql);
// if needed, the SQL statement may be updated as follows:
// $command->text=$newSQL;                
$dataReader=$command->query();
// calling read() repeatedly until it returns false

while(($row=$dataReader->read())!==false) {  
    //$items=array($row["name"]);
    //$ruta=array($row["ruta"]);
     $nivel1[] = array(
               'label'         => $row['name'],
               'url'           => $this->createUrl('get/read',array('nivel1'=>$row['name']))
); 
     $name[]=$row['name'];
  }






    $this->widget('zii.widgets.CMenu',array(
			'items'=>$nivel1)
			); 
    
?>
                 
	</div><!-- mainmenu -->
        
        
        
        
        
        
        
        
        
        
        
        
        
        <div id="mainmenu">
<?php

$lev1 = Yii::app()->request->getQuery('nivel1');


//if($$v!=NULL)$this->returnUrl=array('controller/action');

if($lev1!=NULL){
    
    
/*    
            foreach($name as $n2)
        {
$sql1="select primario,secondary from usersmodules where entidad='01' and main='".$lev1."' group by primario";    
$connection=Yii::app()->db;   // assuming you have configured a "db" connection
// If not, you may explicitly create a connection:
// $connection=new CDbConnection($dsn,$username,$password);
$command=$connection->createCommand($sql1);
// if needed, the SQL statement may be updated as follows:
// $command->text=$newSQL;                
$dataReader1=$command->query();
$row1=$dataReader1->read(); 
$row1['primario'];
$nivel2[] = array(
               'label'         => $row1['primario'],
               'url'           => $row1['secondary']); 
        }
##################################
          $this->widget('zii.widgets.CMenu',array(
			'items'=>$nivel2)
			);   
}                        




}
*/


###NIVEL 1 
$sql1="select primario,secondary from usersmodules where entidad='01' and main='".$lev1."' group by primario";            
//$connection=Yii::app()->db;   // assuming you have configured a "db" connection
// If not, you may explicitly create a connection:
// $connection=new CDbConnection($dsn,$username,$password);
$command1=$connection->createCommand($sql1);
// if needed, the SQL statement may be updated as follows:
// $command->text=$newSQL;                
$dataReader1=$command1->query();
// calling read() repeatedly until it returns false

while(($row1=$dataReader1->read())!==false) {  
    //$items=array($row["name"]);
    //$ruta=array($row["ruta"]);
     $nivel2[] = array(
               'label'         => $row1['primario'],
               'url'           => $this->createUrl('get/read',array('nivel1'=>$lev1,'level2'=>$row1['primario']))
); 
     $name[]=$row['name'];
  }






    $this->widget('zii.widgets.CMenu',array(
			'items'=>$nivel2)
			); 

?>
        </div>     
 
        
        
<div id="mainmenu">
<?php

$lev1 = Yii::app()->request->getQuery('nivel1');


//if($$v!=NULL)$this->returnUrl=array('controller/action');

    
    
/*    
            foreach($name as $n2)
        {
$sql1="select primario,secondary from usersmodules where entidad='01' and main='".$lev1."' group by primario";    
$connection=Yii::app()->db;   // assuming you have configured a "db" connection
// If not, you may explicitly create a connection:
// $connection=new CDbConnection($dsn,$username,$password);
$command=$connection->createCommand($sql1);
// if needed, the SQL statement may be updated as follows:
// $command->text=$newSQL;                
$dataReader1=$command->query();
$row1=$dataReader1->read(); 
$row1['primario'];
$nivel2[] = array(
               'label'         => $row1['primario'],
               'url'           => $row1['secondary']); 
        }
##################################
          $this->widget('zii.widgets.CMenu',array(
			'items'=>$nivel2)
			);   
}                        




}
*/

    
    

$lev2 = Yii::app()->request->getQuery('level2');




###NIVEL 3 
 $sql3="select primario,secondary from usersmodules where entidad='01' and main='".$lev1."' and primario='".$lev2."' group by secondary";            
//$connection=Yii::app()->db;   // assuming you have configured a "db" connection
// If not, you may explicitly create a connection:
// $connection=new CDbConnection($dsn,$username,$password);
$command3=$connection->createCommand($sql3);
// if needed, the SQL statement may be updated as follows:
// $command->text=$newSQL;                
$dataReader3=$command3->query();
// calling read() repeatedly until it returns false

while(($row3=$dataReader3->read())!==false) {  
    //$items=array($row["name"]);
    //$ruta=array($row["ruta"]);
     $nivel3[] = array(
               'label'         => $row3['secondary'],
               'url'           => $this->createUrl('get/read',array('nivel1'=>$lev1,'level2'=>$lev2,'level3'=>$row3['secondary']))
); 
     $name[]=$row['name'];
  }






    $this->widget('zii.widgets.CMenu',array(
			'items'=>$nivel3)
			); 

?>
        </div>     
         
      
<div id="mainmenu">
<?php



//if($$v!=NULL)$this->returnUrl=array('controller/action');
  
    
/*    
            foreach($name as $n2)
        {
$sql1="select primario,secondary from usersmodules where entidad='01' and main='".$lev1."' group by primario";    
$connection=Yii::app()->db;   // assuming you have configured a "db" connection
// If not, you may explicitly create a connection:
// $connection=new CDbConnection($dsn,$username,$password);
$command=$connection->createCommand($sql1);
// if needed, the SQL statement may be updated as follows:
// $command->text=$newSQL;                
$dataReader1=$command->query();
$row1=$dataReader1->read(); 
$row1['primario'];
$nivel2[] = array(
               'label'         => $row1['primario'],
               'url'           => $row1['secondary']); 
        }
##################################
          $this->widget('zii.widgets.CMenu',array(
			'items'=>$nivel2)
			);   
}                        




}
*/

    
    

$lev3 = Yii::app()->request->getQuery('level3');




###NIVEL 4 
$sql4="select * from extensionmodules where entidad='01' and mainmodulename='".$lev2."' and mainmodule='".$lev3."' ";            
//$connection=Yii::app()->db;   // assuming you have configured a "db" connection
// If not, you may explicitly create a connection:
// $connection=new CDbConnection($dsn,$username,$password);
$command4=$connection->createCommand($sql4);
// if needed, the SQL statement may be updated as follows:
// $command->text=$newSQL;                
$dataReader4=$command4->query();
// calling read() repeatedly until it returns false

while(($row4=$dataReader4->read())!==false) {  
    //$items=array($row["name"]);
    //$ruta=array($row["ruta"]);
     $nivel4[] = array(
               'label'         => $row4['name'],
               'url'           => $this->createUrl('get/read',array('nivel1'=>$lev1,'level2'=>$lev2,'level3'=>$lev3))
); 
     $name[]=$row['name'];
  }






    $this->widget('zii.widgets.CMenu',array(
			'items'=>$nivel4)
			); 

?>
        </div>     
         
        

        
<?php 


}
}
?>


	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Casa de ovidio.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
