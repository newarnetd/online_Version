<?php 

class User
{

	public function get_data($id)
	{
		$query = "SELECT * FROM users WHERE userid = ? LIMIT 1";
		$DB = new Database();
		$result = $DB->read($query, [$id]); 
		if($result)
		{

			$row = $result[0];
			return $row;
		}else
		{
			return false;
		}
	}

	public function get_user($id)
	{

		$query = "SELECT * from users WHERE userid = ? LIMIT 1";
		$DB = new Database();
		$result = $DB->read($query, [$id]); 

		if($result)
		{
			return $result[0];
		}else
		{

			return false;
		}
	}
	

	
public function Mesamis($id, $type)
{
    $DB = new Database();
    $sql = "SELECT amis FROM relations WHERE type = ? AND userid = ? LIMIT 1";
    $result = $DB->read($sql, [$type, $id]);

    if ($result && is_array($result)) {
        $FriedsIds = json_decode($result[0]['amis'], true);
        return $FriedsIds;
    }
    return array();
}

	public function Mes_suivi($id,$type){

		$DB = new Database();
		$sql = "SELECT suivre FROM relations WHERE type= ? && userid = ? limit 1";
			$result = $DB->read($sql,[$type,$id]);
			if($result){

				$following = json_decode($result[0]['suivre'],true);
				return $following;
			}
			return array();
	}

	public function relation_liaison($id, $type) {
		$DB = new Database();
		$type = nettoyerDonnee($type);
	
		if (is_numeric($id)) {
			$sql = "SELECT liaison FROM relation WHERE type = ? AND userid = ?";
			$DB = new Database();
			$result = $DB->read($sql, [$type, $id]);
	
			if ($result) {
				$liaison = json_decode($result[0]['liaison'], true);
				shuffle($liaison);
				$liaison = array_slice($liaison, 0, 5);
				return $liaison;
			}
		}
		
		return false;
	}
	public function membresGroupe($id) {
		$DB = new Database();
		$sql = "SELECT membres FROM membres_groupes WHERE groupid = ?";
		$DB = new Database();
		$result = $DB->read($sql, [$id]);

		if ($result) {
			$liaison = json_decode($result[0]['membres'], true);
			shuffle($liaison);
			return $liaison;
		}
		return false;
	}
	
	function get_relation($id,$type){

		$DB = new Database();
		$type = nettoyerDonnee($type);
			$sql = "select $type from relations where type='$type' && userid = '$id' limit 1";
			$result = $DB->read($sql);
			if(is_array($result)){

				$relation = json_decode($result[0][$type],true);
				return $relation;
			}
		return false;
	}

	
}