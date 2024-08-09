<?php

  namespace App\Models;

  class User {

    const TABLE = 'user';
    private static $conn;

    public static function getById(int $id) {
      try {
        if (!self::$conn)
          self::$conn = new \PDO(DBDRIVE . ': host=' . DBHOST . '; dbname=' . DBNAME, DBUSER, DBPASS);
      
        self::$conn->exec("set names utf8");
        $sql = "SELECT * FROM " . self::TABLE . " WHERE id = :id";
        $query = self::$conn->prepare($sql);
        $query->bindValue(':id', $id);
        $query->execute();

        if ($query->rowCount() > 0) {
          return $query->fetch(\PDO::FETCH_ASSOC);
        } else {
          throw new \Exception("Nenhum usuário encontrado!");
        }
    
      } catch (\PDOException $erro) {
        echo $erro->getMessage();
      }
    }

    public static function getAll() {
      try {
        if (!self::$conn)
          self::$conn = new \PDO(DBDRIVE . ': host=' . DBHOST . '; dbname=' . DBNAME, DBUSER, DBPASS);
      
        self::$conn->exec("set names utf8");
        $sql = "SELECT * FROM " . self::TABLE . " ORDER BY name";
        $query = self::$conn->prepare($sql);
        $query->execute();

        return $query->fetchAll(\PDO::FETCH_ASSOC);
    
      } catch (\PDOException $erro) {
        echo $erro->getMessage();
      }
    }
    
  }