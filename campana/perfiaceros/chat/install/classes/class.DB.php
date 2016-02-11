<?php

class DB {

      function __construct($host, $user, $password) {
		
        try {
            $this->dbh = new PDO('mysql:host='.$host, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            $this->dbh->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->dbh->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);

        } catch (PDOException $e) {
        	
            throw new Exception($e->getMessage(), $e->errorInfo[1]);
        }
      }
      public function Close() {

          $this->dbh = null;
      }
      public function prep($queryString) {
          try {
                return $this->dbh->prepare($queryString);
                
          } catch(PDOException $e) {

                throw new Exception($e->getMessage(), $e->errorInfo[1]);
          }
      }
      public function Exec($stmt, $parametri = null) {
          try {

              $stmt->execute($parametri);

          } catch(PDOException $e) {

              throw new Exception($e->getMessage(), $e->errorInfo[1]);
          }
      }
      public function getAll($stmt, $parametri = null, $fetch = PDO::FETCH_ASSOC) {
          try {

              $this->Exec($stmt, $parametri);
              return $stmt->fetchAll($fetch);

          } catch(PDOException $e) {

              throw new Exception($e->getMessage(), $e->errorInfo[1]);
          }
      }
      public function TranStart()
      {
          try {

              $this->dbh->beginTransaction();

          } catch(PDOException $e)
          {
              throw new Exception($e->getMessage(), $e->errorInfo[1]);
          }
      }
      public function Commit()
      {
          try {
              $this->dbh->commit();

          }catch(PDOException $e)
          {
              throw new Exception($e->getMessage(), $e->errorInfo[1]);
          }

      }
      public function RollBack()
      {
          try {

              $this->dbh->rollBack();

          } catch(PDOException $e)
          {
              throw new Exception($e->getMessage(), $e->errorInfo[1]);
          }
      }
      public function LastId()
      {
        try {

            $id = $this->dbh->lastInsertId();
			return $id;
        }
        catch(PDOException $e)
        {
            throw new Exception($e->getMessage(), $e->errorInfo[1]);

        }

      }
      public function getFirst($stmt,$parametri = null, $fetch = PDO::FETCH_ASSOC) {
          try {
              $this->Exec($stmt, $parametri);
              return $stmt->fetch($fetch);
             
          } catch(PDOException $e) {

              throw new Exception($e->getMessage(), $e->errorInfo[1]);
          }
      }
}

?>