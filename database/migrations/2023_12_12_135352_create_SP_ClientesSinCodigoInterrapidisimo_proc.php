<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("CREATE DEFINER=`apiappave`@`%` PROCEDURE `SP_ClientesSinCodigoInterrapidisimo`()
BEGIN
SELECT
    b.idempresa As IdEmpresa,
    a.ds As nombre,
    b.idsector As documentoIdentidad,
    d.subestado As estado,
    a.codigointerrapidisimo As SucursalInterrapidisimo,
    CONCAT(c.dsnombre,' ',c.dsnombre2,' ',c.dsapellido1,' ',c.dsapellido2) As AsesorLogistico,
    (
        SELECT
            CONCAT(dsnombre,' ',dsnombre2,' ',dsapellido1,' ',dsapellido2)
        FROM
            tblusuariose
        WHERE
            id = b.idserviciocli
    ) As AsesorComercial
FROM
    tblpaqueteo_agentes a
    JOIN tblempresa b ON a.idexp = b.idempresa
    JOIN tblusuariose c ON b.idlogistico = c.id
    JOIN tblestadosclientesv2 d ON b.idestadocliente = d.id
WHERE
    (isnull(a.codigointerrapidisimo) 
    OR a.codigointerrapidisimo = '')
    AND a.idactivo IN(3, 6, 16, 14);
END");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS SP_ClientesSinCodigoInterrapidisimo");
    }
};
