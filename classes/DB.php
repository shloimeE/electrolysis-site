<?

class DB
{
    protected static $instance;
    protected $pdo;

    /**
     * DB constructor.
     */
    public function __construct()
    {
        $opt  = array(
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_EMULATE_PREPARES   => FALSE
        );

        try
        {
            $dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME;
            $this->pdo = new PDO($dsn, DB_USERNAME, DB_PWD, $opt);
        }
        catch (PDOException $e)
        {
            echo $e->getMessage();
        }
    }


    public function hello()
    {
        echo 'fooo';
    }


    /**
     * @return DB
     */
    public static function instance()
    {
        if(self::$instance === null)
        {
            self::$instance = new self;
        }
        return self::$instance;
    }


    /**
     * @param $method
     * @param $args
     * @return mixed
     */
    public function __call($method, $args)
    {
        return call_user_func_array([$this->pdo, $method], $args);
    }


    /**
     * @param $sql
     * @param array $args
     * @return mixed
     */
    public function run($sql, $args = [])
    {
        if(!$args)
        {
            return $this->query($sql);
        }

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($args);
        return $stmt;
    }



}