<?php include("../seguridad.php"); ?>
<?php include("../encabezado.php"); ?>
<center>
<legend>RESPALDOS BD AUTOSERVICIO</legend>
<?php
/**
 * LHPM - Backup Feb 2018 - Medellín
 */

// Report all errors
//error_reporting(E_ALL);
header ('Content-type: text/html; charset=utf-8');
date_default_timezone_set('America/Bogota');
 
/**
 * Define database parameters here
 */
define("DB_USER", 'luipat7_dg');
define("DB_PASSWORD", 'Sistemas2018');
define("DB_NAME", 'luipat7_dg');
define("DB_HOST", 'localhost');
define("OUTPUT_DIR", 'backup/');
define("TABLES", '*');
 
/**
 * Instantiate Backup_Database and perform backup
 */
$backupDatabase = new Backup_Database(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$status = $backupDatabase->backupTables(TABLES, OUTPUT_DIR) ? 'OK' : 'KO';
echo "<br /><br /><br />Resultado del Backup: ".$status;
 
/**
 * The Backup_Database class
 */
class Backup_Database {
    /**
     * Host where database is located
     */
    var $host = '';
 
    /**
     * Username used to connect to database
     */
    var $username = '';
 
    /**
     * Password used to connect to database
     */
    var $passwd = '';
 
    /**
     * Database to backup
     */
    var $dbName = '';
 
    /**
     * Database charset
     */
    var $charset = '';
 
    /**
     * Constructor initializes database
     */
    function Backup_Database($host, $username, $passwd, $dbName, $charset = 'utf8')
    {
        $this->host     = $host;
        $this->username = $username;
        $this->passwd   = $passwd;
        $this->dbName   = $dbName;
        $this->charset  = $charset;
 
        $this->initializeDatabase();
    }
 
    protected function initializeDatabase()
    {
        $conn = @mysql_connect($this->host, $this->username, $this->passwd);
        mysql_select_db($this->dbName, $conn);
        if (! mysql_set_charset ($this->charset, $conn))
        {
            mysql_query('SET NAMES '.$this->charset);
        }
    }
 
    /**
     * Backup the whole database or just some tables
     * Use '*' for whole database or 'table1 table2 table3...'
     * @param string $tables
     */
    public function backupTables($tables = '*', $outputDir = '.')
    {
        try
        {
            /**
            * Tables to export
            */
            if($tables == '*')
            {
                $tables = array();
                $result = mysql_query('SHOW TABLES');
                while($row = mysql_fetch_row($result))
                {
                    $tables[] = $row[0];
                }
            }
            else
            {
                $tables = is_array($tables) ? $tables : explode(',',$tables);
            }
 
            $sql = 'CREATE DATABASE IF NOT EXISTS '.$this->dbName.";\n\n";
            $sql .= 'USE '.$this->dbName.";\n\n";
 
            /**
            * Iterate tables
            */
            foreach($tables as $table)
            {
                echo "Backing up ".$table." table...";
 
                $result = mysql_query('SELECT * FROM '.$table);
                $numFields = mysql_num_fields($result);
 
                $sql .= 'DROP TABLE IF EXISTS '.$table.';';
                $row2 = mysql_fetch_row(mysql_query('SHOW CREATE TABLE '.$table));
                $sql.= "\n\n".$row2[1].";\n\n";
 
                for ($i = 0; $i < $numFields; $i++)
                {
                    while($row = mysql_fetch_row($result))
                    {
                        $sql .= 'INSERT INTO '.$table.' VALUES(';
                        for($j=0; $j<$numFields; $j++)
                        {
                            $row[$j] = addslashes($row[$j]);
                            //$row[$j] = ereg_replace("\n","\\n",$row[$j]);
                            if (isset($row[$j]))
                            {
                                $sql .= '"'.$row[$j].'"' ;
                            }
                            else
                            {
                                $sql.= '""';
                            }
 
                            if ($j < ($numFields-1))
                            {
                                $sql .= ',';
                            }
                        }
 
                        $sql.= ");\n";
                    }
                }
 
                $sql.="\n\n\n";
 
                echo " OK" . "<br />";
            }
        }
        catch (Exception $e)
        {
            var_dump($e->getMessage());
            return false;
        }
 
        return $this->saveFile($sql, $outputDir);
    }
 
    /**
     * Save SQL to file
     * @param string $sql
     */
    protected function saveFile(&$sql, $outputDir = '.')
    {
        if (!$sql) return false;
 
        try
        {
            $handle = fopen($outputDir.'/db-backup-'.$this->dbName.'-'.date("Ymd-His", time()).'.sql','w+');
            fwrite($handle, $sql);


$dir = $outputDir; 
$directorio=opendir($dir); 
echo "<span class='texto_menu_Titulo'>Respaldos realizados:</span>"; 
echo "<br><br>"; 
$i=0;
while ($archivo = readdir($directorio)){ 
 if($archivo=='.' or $archivo=='..'){ 
 echo ""; 
 }else {
 $i=$i+1;
 $entradas[$archivo] = filemtime($dir."/".$archivo);
 } 
 } 
  arsort ($entradas); // Con ksort($entradas) mostras los menos recientes
closedir($directorio); 
            fclose($handle);

$i=0; 

foreach ($entradas as $archivo => $timestamp) { 

if ( $i < 10 ) // Mostras solo los 4 más recientes
    {
echo "<br>";   
echo "<ul type='square'><li>";
//Busco la fecha de modificación del archivo.
echo date("d-m-y h:i:s", $timestamp);
echo " | ";
//Variable que envio a descarga.php para que los link se conviertan descargables.
echo "<a href='backup/$archivo'>$dir/$archivo</a>";
echo "</li></ul>"; 
}

$i++; // Aumentamos contador


}

        }
        catch (Exception $e)
        {
            var_dump($e->getMessage());
            return false;
        }
 
        return true;
    }
}

?>
</center>