@extends('layouts.app')

@section('content')


<h1 class="text-sky-400 text-xl font-medium mb-3">Profil</h1>
<form method="POST" action="" class="w-full  mx-auto rounded-lg border shadow-md p-5 mb-5">
    @csrf
    <div class="grid grid-cols-2">
        <div class="mr-14">
            <h1 class="text-left text-sky-300 mb-3 font-bold text-xl">Informations personnelles</h1>

            <div class="mb-4">
                <label for="nom" class="block font-semibold text-gray-700 mb-2">Nom<span class="text-red-600">*</span></label>
                <input id="nom" type="text" name="nom" class="shadow border rounded w-full p-2" value="{{ old('nom') }}" autocomplete="nom" placeholder="Votre nom" autofocus>
                @error('nom')
                <span class="text-red-400 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="prenom" class="block font-semibold text-gray-700 mb-2">Prénom<span class="text-red-600">*</span></label>
                <input id="prenom" type="text" name="prenom" class="shadow border rounded w-full p-2" value="{{ old('prenom') }}" autocomplete="prenom" placeholder="Votre prénom" autofocus>
                @error('prenom')
                <span class="text-red-400 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="dateN" class="block font-semibold text-gray-700 mb-2">Date de Naissance<span class="text-red-600">*</span></label>
                <input id="daten" type="date" name="daten" class="shadow border rounded w-full p-2" value="{{ old('daten') }}" autocomplete="prenom" placeholder="Votre prénom" autofocus>
                @error('daten')
                <span class="text-red-400 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="tel" class="block font-semibold text-gray-700 mb-2">Téléphone<span class="text-red-600">*</span></label>
                <input id="tel" type="text" name="tel" class="shadow border rounded w-full p-2" value="{{ old('tel') }}" autocomplete="prenom" placeholder="00221 777 77 77" autofocus>
                @error('prenom')
                <span class="text-red-400 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block font-semibold text-gray-700 mb-2">Email<span class="text-red-600">*</span></label>
                <input id="email" type="email" name="email" class="shadow border rounded w-full p-2" value="{{ old('email') }}" autocomplete="email" placeholder="Votre email" autofocus>
                @error('email')
                <span class="text-red-400 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="ville" class="block font-semibold text-gray-700 mb-2">Addresse<span class="text-red-600">*</span></label>
                <input id="ville" type="text" name="ville" class="shadow border rounded w-full p-2" value="{{ old('ville') }}" autocomplete="ville" placeholder="Votre addresse" autofocus>
                @error('ville')
                <span class="text-red-400 text-sm">{{ $message }}</span>
                @enderror
            </div>


        </div>

        <div>
            <!-- pour l'expérience -->
            <h1 class="text-left text-sky-300 mb-3 font-bold text-xl ">Expérience</h1>

            <div class="mb-4">
                <label for="metier" class="block font-semibold text-gray-700 mb-2">Métier<span class="text-red-600">*</span></label>
                <input id="metier" type="text" name="metier" class="shadow border rounded w-full p-2" value="{{ old('metier') }}" autocomplete="metier" placeholder="Votre métier" autofocus>
                @error('metier')
                <span class="text-red-400 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="competence" class="block font-semibold text-gray-700 mb-2">Compétences<span class="text-red-600">*</span></label>
                <table class="" id="dynamicAddRemove">

                    <tr>
                        <td>
                            <input type="text" name="addMoreInputFields[0][competence]" placeholder="" class="shadow border rounded w-full p-2" />
                        </td>
                        <td><button type="button" name="add" id="dynamic-ar" class="ml-1 text-sky-400 font-bold text-2xl">+</button></td>
                    </tr>
                </table>
                @error('competence')
                <span class="text-red-400 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="cv" class="block font-semibold text-gray-700 mb-2">Votre cv</label>
                <input id="cv" type="file" name="cv" class="shadow border rounded w-full p-2" value="{{ old('cv') }}" autocomplete="cv" placeholder="Votre cv" autofocus>
            </div>

            <div class="mb-4">
                <label for="description" class="block font-semibold text-gray-700 mb-2">Description<span class="text-red-600">*</span></label>
                <textarea id="description" name="description" class="shadow border rounded w-full p-2" value="{{ old('description') }}" placeholder="Décrivez-vous"></textarea>
                @error('description')
                <span class="text-red-400 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="tarif" class="block font-semibold text-gray-700 mb-2">Tarif par heure<span class="text-red-600">*</span></label>
                <input id="tarif" type="number" name="tarif" class="shadow border rounded w-full p-2" value="{{ old('tarif') }}" autocomplete="tarif" placeholder="Tarif" autofocus>
                @error('tarif')
                <span class="text-red-400 text-sm">{{ $message }}</span>
                @enderror
            </div>


        </div>

        <button type="submit" class="ml-96 bg-sky-500 text-white  hover:bg-blue-700 transition ease-in-out duration-500 rounded-md shadow-md block px-2 py-2 mt-3">Enregistrer</button>
    </div>
</form>




<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    var i = 0;
    $("#dynamic-ar").click(function() {
        ++i;
        $("#dynamicAddRemove").append('<tr><td><input type="text" name="addMoreInputFields[' + i +
            '][competence]" placeholder="" class="shadow border rounded w-full p-2"" /></td><td><button type="button" class="ml-1 text-red-400 font-bold text-2xl remove-input-field">-</button></td></tr>'
        );
    });
    $(document).on('click', '.remove-input-field', function() {
        $(this).parents('tr').remove();
    });
</script>
@endsection