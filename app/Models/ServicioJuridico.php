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
                'Ofrecen orientación para evitar incurrir en delitos o para manejar situaciones que podrían derivar en problemas legales. Esto puede incluir la revisión de contratos, políticas internas de empresas, o simplemente resolver dudas sobre la legalidad de ciertas acciones.'
            ),
            new self(
                2,
                'Asistencia y Representación en Fase de Investigación',
                'Este es uno de los servicios más críticos:'
            ),
            new self(
                3,
                'Defensa en Juicios Penales',
                'Una vez que se formaliza una acusación, el despacho se encarga de la defensa del acusado, lo que incluye:'
            ),
            new self(
                4,
                'Acusación Particular',
                'En casos donde un cliente ha sido víctima de un delito, el despacho puede representarlo para:'
            ),
            new self(
                5,
                'Negociación de Acuerdos y Mediación',
                'Si la sentencia no es favorable, el despacho puede interponer los recursos legales pertinentes:'
            ),
            new self(
                6,
                'Delitos Comunes',
                ''
            ),
            new self(
                7,
                'Delitos Relacionados con Crimen organizado',
                ''
            ),
            new self(
                8,
                'Gestión de Medidas Cautelares y Ejecución de Sentencias',
                ''
            ),
        ];
    }
}