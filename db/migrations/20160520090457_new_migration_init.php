<?php

use Phinx\Migration\AbstractMigration;

class NewMigrationInit extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $this->execute("CREATE TABLE `user` (
                       `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
                       `name` varchar(255) NOT NULL DEFAULT '',
                       `password` varchar(20) NOT NULL DEFAULT '123456',
                       PRIMARY KEY (`id`)
                       ) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
    }
}
