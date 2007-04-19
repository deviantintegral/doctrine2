
Doctrine offers various table options. All table options can be set via Doctrine_Record::option($optionName, $value)



For example if you are using Mysql and want to use INNODB tables it can be done as follows:



<code type="php">
class MyInnoDbRecord extends Doctrine_Record
{
    public function setTableDefinition()
    {
        \$this->hasColumn('name', 'string');

        \$this->option('type', 'INNODB');
    }
}
?></code> 


In the following example we set the collate and character set options:



<code type="php">
class MyCustomOptionRecord extends Doctrine_Record
{
    public function setTableDefinition()
    {
        \$this->hasColumn('name', 'string');

        \$this->option('collate', 'utf8_unicode_ci');
        \$this->option('charset', 'utf8');
    }
}
?></code>

