<?php

namespace App\Http\Controllers;

use App\Models\Abogado;
use App\Models\ServicioJuridico;
use App\Models\PreguntaFrecuente;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Mostrar la landing page.
     */
    public function index()
    {
        $datos = [
            'nombreEmpresa' => 'SALVATIER ABOGADOS',
            'descripcion' => 'Más alla de nuestra experiencia técnica, nos distinguimos por nuestro enfoque empático y centrado en la persona. entendemos que cada caso es ńico y que detrás de cada situación legal hay un ser humano con necesidades y preocupaciones.',
            'equipoTitle' => 'Equipo jurídico',
            'equipoDesc' => 'Contamos con un equipo de abogados comprometidos con la justicia, la excelencia y las personas. Cada uno aporta su experiencia y conocimiento técnico, pero también un enfoque humano que entiende, acompaña y apoya a quienes confían en nosotros',
            'abogados' => Abogado::obtenerEquipo(),
            'serviciosJuridicos' => ServicioJuridico::obtenerServicios(),
            'faqs' => PreguntaFrecuente::obtenerFaqs(),
            'mision' => 'Nuestra misión es brindar servicios legales de la más alta calidad con un enfoque profundamente humano, garantizando una defensa justa y accesible para todos. Nos dedicamos a comprender las necesidades individuales de cada cliente, ofreciendo soluciones jurídicas personalizadas que no solo aborden sus problemas legales, sino que también les brinden tranquilidad y apoyo en momentos difíciles. Actuamos con integridad, empatía y profesionalismo, buscando siempre la resolución más beneficiosa para nuestros representados, al tiempo que promovemos la justicia y el respeto por los derechos humanos en nuestra comunidad.',
            'vision' => 'Aspiramos a ser un despacho jurídico líder y referente en la región, reconocido por nuestra excelencia legal y, sobre todo, por nuestro compromiso inquebrantable con el bienestar de nuestros clientes. Buscamos trascender la relación abogado-cliente tradicional, construyendo lazos de confianza basados en la cercanía y la comprensión. Visualizamos un futuro donde el acceso a la justicia sea más equitativo y donde nuestro despacho sea un baluarte de la defensa de los derechos individuales y colectivos, contribuyendo activamente a una sociedad más justa y compasiva. Nos esforzamos por innovar en nuestras prácticas, manteniendo siempre un equilibrio entre la eficiencia legal y la calidez humana.',
            'gpsOficinaCentral' => 'https://maps.app.goo.gl/uuYb6wXdxp3a1rVP9',
            'facebookUrl' => 'https://www.facebook.com/salvatierley?mibextid=ZbWKwL',
            'instagramUrl' => 'https://www.instagram.com/salvatier_abogados?igsh=djFhOGc2MzgzMzVq',
            'youtubeUrl' => 'https://youtube.com/@culturalegalsv?si=1dWUvhfgvKL25AvC',
            'tikTokUrl' => 'https://www.tiktok.com/@salvatierabogados?_t=ZM-90xOusoVPTv&_r=1',
            'whatsappUrl' => 'https://wa.me/50373976850',
            'telefonoContacto' => '73976850',
            // Coordenadas GPS para el mapa de Google
            'mapLocations' => [
                [
                    'title' => 'Oficina Central',
                    'description' => 'Colonia médica, edificio inversiones médicas 250 B, segundo nivel, local 1.',
                    'lat' => 13.7088106,
                    'lng' => -89.2014538,
                ],
                [
                    'title' => 'SAN MIGUEL',
                    'description' => 'Acceso "A Contiguo a Medicina Legal" Plaza Sol, 7A Calle Poniente Local 6',
                    'lat' => 13.4761898,
                    'lng' => -88.181531,
                ],
                [
                    'title' => 'SANTA ANA',
                    'description' => 'A 4 cuadras de catedral la ex casa de la cultura de Santa Ana local 7, 2do nivel',
                    'lat' => 13.995581,
                    'lng' => -89.559813,
                ],
            ],
        ];
        
        return view('landing', $datos);
    }
}
