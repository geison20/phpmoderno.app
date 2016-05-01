<?php 

namespace PHPModerno\PDO\Classes;


class Connection
{
	/**
	 * Reserva a DSN para connection com PDO
	 * @var [Array]
	 */
	private $dsn;

	/**
	 * Return instance for connection database
	 * @var [object]
	 */
	public $conn;

	public function __construct(array $dsn)
	{
		$this->dsn = $dsn;

		$this->connection();
	}

	private function connection()
	{
		list($host, $dbname, $port, $user, $pass) = $this->dsn;

		try{
			$conn = new \PDO("mysql:host=$host;port=$port;dbname=$dbname;", $user, $pass);
			$this->conn = $conn;

		}catch(\PDOException $erro){

			$this->saveLogConnection($erro);
			die('Erro na connection do Database');
		}
	}

	public function getConnection()
	{
		return $this->conn;
	}

	public function saveLogConnection($erro)
	{
		// SALVA O LOG CASO DE ERRO
	}
}
