<?php

namespace App\Models;

class PreguntaFrecuente
{
    private int $id;
    private string $pregunta;
    private string $respuesta;

    public function __construct(int $id, string $pregunta, string $respuesta)
    {
        $this->id = $id;
        $this->pregunta = $pregunta;
        $this->respuesta = $respuesta;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getPregunta(): string
    {
        return $this->pregunta;
    }

    public function getRespuesta(): string
    {
        return $this->respuesta;
    }

    public static function obtenerFaqs(): array
    {
        return [
            new self(
                1,
                '¿Qué tipo de casos manejan?',
                '<ul><li>Derecho penal: Delitos, Defensas, acusaciones.</li><li>Derecho civil: Contratos, Herencias, Propiedades, etc.</li><li>Derecho Mercantil Empresarial: Constitución de empresas, contratos comerciales, fusiones.</li><li>Derecho Familiar: Divorcios, custodia, pensiones alimenticias, entre otros.</li></ul>'
            ),
            new self(
                2,
                '¿Cuál es el precio de una Asesoría? ',
                'El costo de una asesoría legal es de <b>$60.00.</b>'
            ),
            new self(
                3,
                'Necesito preparar algún documento o información antes de la primera asesoría?',
                'Si es necesario traer sus documentos de Identificación personal, números de documentos.'
            ),
            new self(
                4,
                '¿Cuánto tiempo dura el proceso?',
                'Depende del tipo de proceso y la materia de que se trate.'
            ),
            new self(
                5,
                '¿Cuál es el precio del proceso completo?',
                'Depende del caso y si es fuera o dentro de San Salvador.'
            ),
            new self(
                6,
                '¿Puedo cambiarle el apellido del padre a mi hijo?',
                'NO'
            ),
        ];
    }
}
