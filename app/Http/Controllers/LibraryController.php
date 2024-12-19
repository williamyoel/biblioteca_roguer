namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index()
    {
        $libros = [
            (object)[
                'titulo' => 'Introducción a la Informática',
                'resumen' => 'Este libro introduce conceptos básicos de informática.',
                'portada' => 'informatica1.jpg',
            ],
            (object)[
                'titulo' => 'Informática',
                'resumen' => 'Conceptos avanzados de informática.',
                'portada' => 'informatica2.jpg',
            ],
            (object)[
                'titulo' => 'Inteligencia Artificial',
                'resumen' => 'Introducción a la IA.',
                'portada' => 'ia.jpg',
            ],
        ];

        return view('biblioteca.index', compact('libros'));
    }
}
