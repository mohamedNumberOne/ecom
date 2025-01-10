<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Commandes') }}
        </h2>
    </x-slot>

    <div class="py-12">
      

        @if (count($all_orders) > 0)
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4 mt-5">
                <h3 class="mb-3">Liste des Commandes <i class="fa-solid fa-money-bill-transfer"></i></h3>
                <table class="table table-striped table-hover">
                    <tr>
                        <td> N° Comm. </td>
                        <td> Client </td>
                        <td> Total </td>
                        <td> Livraison </td>
                        <td> date Commande </td>
                        <td> action </td>
                    </tr>
                    @foreach ($all_orders as $order)
                    <tr>
                        <td> {{ $order-> nom_pro }} </td>
                        <td>
                            <img src="{{ asset('storage/' . $order->photo_principale) }}" alt="img" width="50px">
                        </td>

                        <td> {{ $order->prix }}  Da</td>
                        <td> {{ $order -> nom_category }} </td>
                        <td> {{ $order->created_at ? $order->created_at->format('Y/m/d') : 'Date inconnue' }}
                        </td>
                        <td>

                            <form action="{{ route('delete_product', $id = $order->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="supprimer">
                            </form>

                            <a href="{{ route('update_product_page', $id = $order->id) }}" class="btn btn-primary mt-2">
                                modifier </a>
                        </td>
                    </tr>
                    @endforeach
                </table>

            </div>
        </div>
        @endif
    </div>

 

</x-app-layout>