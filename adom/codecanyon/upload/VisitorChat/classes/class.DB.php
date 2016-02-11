<?php

class DB {

      private static function DbObject()
      {
          return $GLOBALS['db_connect'];
      }
      public static function PsqlConnect() {
		
		global $_;
		
        try {
            $dbh = new PDO('mysql:dbname='.$_['DB'].';host='.$_['HOST'], $_['USER'], $_['PASS'], array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            $dbh->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $dbh->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);

            return $dbh;

        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), $e->errorInfo[1]);
        }
      }
      public static function Close() {
          $db = self::DbObject();
          $db = null;
      }
      public static function prep($queryString) {
          try {
                return self::DbObject()->prepare($queryString);
                
          } catch(PDOException $e) {

                throw new Exception($e->getMessage(), $e->errorInfo[1]);
          }
      }
      public static function Exec($stmt, $parametri = null) {
          try {

              $stmt->execute($parametri);

          } catch(PDOException $e) {

              throw new Exception($e->getMessage(), $e->errorInfo[1]);
          }
      }
      public static function getAll($stmt, $parametri = null, $fetch = PDO::FETCH_ASSOC) {
          try {

              self::Exec($stmt, $parametri);
              return $stmt->fetchAll($fetch);

          } catch(PDOException $e) {

              throw new Exception($e->getMessage(), $e->errorInfo[1]);
          }
      }
      public static function TranStart()
      {
          try {

              self::DbObject()->beginTransaction();

          } catch(PDOException $e)
          {
              throw new Exception($e->getMessage(), $e->errorInfo[1]);
          }
      }
      public static function Commit()
      {
          try {
              self::DbObject()->commit();

          }catch(PDOException $e)
          {
              throw new Exception($e->getMessage(), $e->errorInfo[1]);
          }

      }
      public static function RollBack()
      {
          try {

              self::DbObject()->rollBack();

          } catch(PDOException $e)
          {
              throw new Exception($e->getMessage(), $e->errorInfo[1]);
          }
      }
      public static function LastId()
      {
        try {

            $id = self::DbObject()->lastInsertId();
			return $id;
        }
        catch(PDOException $e)
        {
            throw new Exception($e->getMessage(), $e->errorInfo[1]);

        }

      }
      public static function getFirst($stmt,$parametri = null, $fetch = PDO::FETCH_ASSOC) {
          try {
              self::Exec($stmt, $parametri);
              return $stmt->fetch($fetch);
             
          } catch(PDOException $e) {

              throw new Exception($e->getMessage(), $e->errorInfo[1]);
          }
      }
}

?>