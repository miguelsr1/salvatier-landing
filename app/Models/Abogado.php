<?php

namespace App\Models;

class Abogado
{
    private $id;
    private $nombre;
    private $especialidad;
    private $foto;

    public function __construct(int $id, string $nombre, string $especialidad, string $foto)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->especialidad = $especialidad;
        $this->foto = $foto;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getEspecialidad(): string
    {
        return $this->especialidad;
    }

    public function getFoto(): string
    {
        return $this->foto;
    }

    public static function obtenerEquipo(): array
    {
        return [
            new self(
                1,
                'Lic. Moisés Guzman',
                'Especialista en Derecho Penal y Corporativo',
                'images/lic1.webp'
            ),
            new self(
                2,
                'Lic. Juan Carlos Ríos',
                'Especialista en Derecho notarial, Penal, civil y Corporativo',
                'images/lic2.webp'
            ),
            new self(
                3,
                'Lic. Samuel Contreras',
                'Especialista en Derecho Penal y Procesos Ejecutivos',
                'images/lic3.webp'
            ),
            new self(
                4,
                'Lic. Francisco Maravilla',
                'Especialista en Derecho Penal, Derecho de familia y Laboral',
                'images/lic4.webp'
            ),
            new self(
                5,
                'Licda. Karina de Melara',
                'Especialista en Derecho Penal, Derecho de familia',
                'images/lic5.webp'
            ),
            new self(
                6,
                'Licda. Sindi Canales',
                'Especialista en Derecho Penal',
                'images/lic6.webp'
            ),
            new self(
                7,
                'Licda. Wendi Galicia',
                'Especialista en Derecho Penal',
                'images/lic7.webp'
            ),
            new self(
                8,
                'Licda. Josselyn Ríos',
                'Especialista en Derecho Penal',
                'images/lic8.webp'
            ),
        ];
    }
}