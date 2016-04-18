<?php
class Model
{
	public function login($name)
	{
		try{
			if($_POST['name'] == true)
			{
				echo $name = '福森';
				return $name;
			}
		}
	}
}

?>