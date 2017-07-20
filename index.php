<?php
$user = array(
    array(
        'id' =>123,
        'username'=>'oto',
        'gender'=>'male',
        'languages'=>array('php','java')
    	),
    array(
        'id' =>200,
        'username'=>'anton',
        'gender'=>'male',
        'languages'=>array('c++','java')
    	),
    array(
        'id' =>300,
        'username'=>'gio',
        'gender'=>'male',
        'languages'=>array('javascript','java')
    	)
	);
?>
<ul>
<?php 
foreach ($user as $key => $user) {
	echo '<li>'  . $user['id'] . '</li>' ;
    echo '<ol>';
    foreach ($user['languages'] as $lang) {
        echo '<li>' . $lang . '</li>';
    }
    echo '</ol>';

}

?>
</ul>
