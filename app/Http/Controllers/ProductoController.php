    <?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\Productos; // Asegúrate de importar el modelo correspondiente

    class ProductoController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            // Recupera todos los productos y los pasa a la vista
            $productos = Productos::all();
            return view('index', compact('productos'));
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            // Muestra el formulario para crear un nuevo producto
            return view('productos.create');
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            // Valida los datos del formulario
            $request->validate([
                'nombre' => 'required',
                'referencia' => 'required',
                'precio' => 'required|numeric',
                'peso' => 'required|integer',
                'categoria' => 'required',
                'stock' => 'required|integer',
                'fecha_creacion' => 'required|date',
            ]);

            // Crea un nuevo producto con los datos del formulario
            Productos::create($request->all());

            // Redirige al usuario a la página de inicio o a donde prefieras
            return redirect()->route('productos.index')
                ->with('success', 'Producto creado correctamente.');
        }

        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            // Recupera y muestra los detalles de un producto específico
            $producto = Productos::findOrFail($id);
            return view('productos.show', compact('Productos'));
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            // Muestra el formulario para editar un producto específico
            $producto = Producto::findOrFail($id);
            return view('productos.edit', compact('producto'));
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
            // Valida los datos del formulario
            $request->validate([
                'nombre' => 'required',
                'referencia' => 'required',
                'precio' => 'required|numeric',
                'peso' => 'required|integer',
                'categoria' => 'required',
                'stock' => 'required|integer',
                'fecha_creacion' => 'required|date',
            ]);

            // Actualiza el producto con los datos del formulario
            Productos::findOrFail($id)->update($request->all());

            // Redirige al usuario a la página de inicio o a donde prefieras
            return redirect()->route('productos.index')
                ->with('success', 'Producto actualizado correctamente.');
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            // Elimina el producto seleccionado
            Productos::findOrFail($id)->delete();

            // Redirige al usuario a la página de inicio o a donde prefieras
            return redirect()->route('productos.index')
                ->with('success', 'Producto eliminado correctamente.');
        }
    }
