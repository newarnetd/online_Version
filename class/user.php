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
	public function get_groupe($id)
	{

		$query = "SELECT * from groupe WHERE groupid  = ? LMIT 1";
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

	public function get_friends($id)
	{

		$query = "select * from users where userid != ? ";
		$DB = new Database();
		$result = $DB->read($query,[$id]);

		if($result)
		{
			return $result;
		}else
		{

			return false;
		}
	}


	public function relation_liaison($id, $type) {
		$DB = new Database();
		$type = addslashes($type);
	
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
	public function relation_liaison_tous($id, $type) {
		$DB = new Database();
		$type = addslashes($type);
	
		if (is_numeric($id)) {
			$sql = "SELECT liaison FROM relation WHERE type = ? AND userid = ?";
			$DB = new Database();
			$result = $DB->read($sql, [$type, $id]);
	
			if ($result) {
				$liaison = json_decode($result[0]['liaison'], true);
				return $liaison;
			}
		}
		
		return false;
	}
	
	public function liaison_pubications($id,$type){

	$DB = new Database();
	$type = addslashes($type);

	if (is_numeric($id)) {
		$sql = "SELECT liaison FROM relation WHERE type= ? && userid= ?  LIMIT 1";
		$DB = new Database();
		$result = $DB->read($sql,[$type,$id]);
		$liaison = json_decode($result[0]['liaison'], true);
		return  $liaison;
	}
	}

	public function follow_user($id,$type,$contentid){

			if($id == $contentid && $type == 'user'){
				return;
			}

			$sql = "select following from likes where type= ? && contentid = ? limit 1";
			$DB = new Database();
			$result = $DB->read($sql, [$type, $contentid]);
			if(is_array($result)){

				$likes = json_decode($result[0]['following'],true);

				$user_ids = array_column($likes, "userid");
 
				if(!in_array($id, $user_ids)){

					$arr["userid"] = $id;
					$arr["date"] = date("Y-m-d H:i:s");

					$likes[] = $arr;

					$likes_string = json_encode($likes);
					$sql = "update likes set following = ? where type= ?  && contentid = ? limit 1";
					$DB->save($sql,[$likes_string, $type,$contentid]);

					$user = new User();
					$single_post = $user->get_user($id);
				}else{

					$key = array_search($id, $user_ids);
					unset($likes[$key]);

					$likes_string = json_encode($likes);
					$sql = "update likes set following = ? where type= ? && contentid = ? limit 1";
					$DB->save($sql,[$likes_string,$type,$contentid]);
 
				}
				

			}else{

				$arr["userid"] = $id;
				$arr["date"] = date("Y-m-d H:i:s");

				$arr2[] = $arr;

				$following = json_encode($arr2);
				$sql = "insert into likes (type,contentid,following) values (?,?,?)";
				$DB->save($sql,[$type,$contentid,$following]);
 				$user = new User();
				$single_post = $user->get_user($id);
			}

	}

	
}