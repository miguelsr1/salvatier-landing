<?php

namespace App\Models;

class ServicioJuridico
{
    private $id;
    private $nombre;
    private $descripcion;

    public function __construct(int $id, string $nombre, string $descripcion)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getDescripcion(): string
    {
        return $this->descripcion;
    }
    public static function obtenerServicios(): array
    {
        return [
            new self(
                1,
                'Asesoría Legal Preventiva',
                '<p>Ofrecen orientación para evitar incurrir en delitos o para manejar situaciones que podrían derivar en problemas legales. Esto puede incluir la revisión de contratos, políticas internas de empresas, o simplemente resolver dudas sobre la legalidad de ciertas acciones.</p>'
            ),
            new self(
                2,
                'Asistencia y Representación en Fase de Investigación',
                'Este es uno de los servicios más críticos: <ul><li>Asesorar al investigado desde el momento en que es notificado de una investigación.</li><li>Acompañar al investigado durante interrogatorios policiales o judiciales para asegurar que sus derechos sean respetados.</li><li>Realizar gestiones para la obtención de pruebas que favorezcan a su cliente.</li><li>Presentar recursos para impugnar detenciones o medidas cautelares.</li></ul>'
            ),
            new self(
                3,
                'Defensa en Juicios Penales',
                '<p>Una vez que se formaliza una acusación, el despacho se encarga de la defensa del acusado, lo que incluye: </p><ul><li>Elaboración de la estrategia de defensa más adecuada para el caso.</li><li>Presentación de pruebas y contrainterrogatorio de testigos.</li><li>Argumentación legal ante el tribunal.</li><li>Representación en todas las fases del juicio, incluyendo audiencias preliminares y el juicio.</li></ul>'
            ),
            new self(
                4,
                'Acusación Particular',
                '<p>En casos donde un cliente ha sido víctima de un delito, el despacho puede representarlo para:</p><ul><li>Presentar la denuncia o querella correspondiente.</li><li>Apersonarse en el proceso penal como acusación particular para buscar la condena del responsable y la reparación del daño.</li><li>Colectar pruebas que apoyen la acusación.</li></ul>'
            ),
            new self(
                5,
                'Recursos y Apelaciones',
                '<p>Si la sentencia no es favorable, el despacho puede interponer los recursos legales pertinentes:</p><ul><li>Recurso de Apelación: Contra sentencias de primera instancia.</li><li>Recurso de Casación: En casos específicos ante tribunales superiores.</li><li>Recurso de Amparo: Para proteger derechos fundamentales vulnerados.</li><li>Recurso de Revocatoria: Con dicho recurso se busca que el juez revoque una decisión que ha tomado en audiencia que le cause agravio al representado.</li></ul>'
            ),
            new self(
                6,
                'Delitos Comunes',
                '<ul><li>Delitos contra la vida y la integridad física (homicidio, lesiones).</li><li>Delitos contra la libertad y la seguridad (secuestro, amenazas).</li><li>Delitos contra el patrimonio (robo, hurto, estafa).</li><li>Delitos económicos y financieros (Lavado de dinero/blanqueo de capitales, fraude fiscal).</li><li>Delitos contra la libertad sexual.</li><li>Delitos de violencia de género o intrafamiliar.</li></ul>'
            ),
            new self(
                7,
                'Delitos Relacionados con Crimen organizado',
                '<ul><li>Agrupaciones Ilícitas.</li><li>Trata de personas.</li><li>Delitos relacionados con el tráfico de drogas, entre otros.</li></ul>'
            ),
            new self(
                8,
                'Gestión de Medidas Cautelares y Ejecución de Sentencias',
                '<ul><li>Audiencia Especial de Revisión de medidas cautelares.</li><li>Medios de impugnación (Recurso de revocatoria, revisión, apelación, casación entre otros).</li><li>Seguimiento de la fase de ejecución de la pena, incluyendo solicitudes de beneficios penitenciarios (media pena, libertad condicional, redención de penas).</li></ul>'
            ),
        ];
    }
}