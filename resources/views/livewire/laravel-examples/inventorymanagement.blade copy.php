<div class="flex flex-wrap -mx-3">
    <div class="flex-none w-full max-w-full px-3">
        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <h6 class="font-bold text-xl text-slate-800">Manage Inventory</h6>
                <p class="text-slate-600">Here you can manage your inventory.</p>
            </div>

            <div class="overflow-x-auto">
                <table id="inventory-table" class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 font-bold text-left uppercase bg-transparent border-b border-gray-200 shadow-none text-xs tracking-wide whitespace-nowrap text-slate-400">
                                Type
                            </th>
                            <th class="px-6 py-3 font-bold text-left uppercase bg-transparent border-b border-gray-200 shadow-none text-xs tracking-wide whitespace-nowrap text-slate-400">
                                Brand
                            </th>
                            <th class="px-6 py-3 font-bold text-left uppercase bg-transparent border-b border-gray-200 shadow-none text-xs tracking-wide whitespace-nowrap text-slate-400">
                                Accountable Personnel
                            </th>
                            <th class="px-6 py-3 pl-2 font-bold text-left uppercase bg-transparent border-b border-gray-200 shadow-none text-xs tracking-wide whitespace-nowrap text-slate-400">
                                Division
                            </th>
                            <th class="px-6 py-3 pl-2 font-bold text-left uppercase bg-transparent border-b border-gray-200 shadow-none text-xs tracking-wide whitespace-nowrap text-slate-400">
                                Province
                            </th>
                            <th class="px-6 py-3 font-bold text-center uppercase bg-transparent border-b border-gray-200 shadow-none text-xs tracking-wide whitespace-nowrap text-slate-400">
                                Operating Unit
                            </th>
                            <th class="px-6 py-3 font-bold text-center uppercase bg-transparent border-b border-gray-200 shadow-none text-xs tracking-wide whitespace-nowrap text-slate-400">
                                Acquisition Date
                            </th>
                            <th class="px-6 py-3 font-bold text-center uppercase bg-transparent border-b border-gray-200 shadow-none text-xs tracking-wide whitespace-nowrap text-slate-400">
                                Status
                            </th>
                            <th class="px-6 py-3 font-bold text-center uppercase bg-transparent border-b border-gray-200 shadow-none text-xs tracking-wide whitespace-nowrap text-slate-400">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($inventories as $inventory)
                        <tr>
                            <td class="pl-6 align-middle border-b whitespace-nowrap">
                                <p class="font-semibold text-xs text-slate-800">
                                    {{ $inventory->typeRelation->name }}
                                </p>
                            </td>
                            <td class="pl-6 align-middle border-b whitespace-nowrap">
                                <p class="font-semibold text-xs text-slate-800">
                                    {{ $inventory->brand }}
                                </p>
                            </td>
                            <td class="pl-6 align-middle border-b whitespace-nowrap">
                                <p class="font-semibold text-xs text-slate-800">
                                    {{ $inventory->accountablePersonnelRelation->name }}
                                </p>
                            </td>
                            <td class="p-2 align-middle border-b whitespace-nowrap">
                                <p class="font-semibold text-xs text-slate-800">
                                    {{ $inventory->divisionRelation->name }}
                                </p>
                            </td>
                            <td class="p-2 text-center align-middle border-b whitespace-nowrap">
                                <p class="font-semibold text-xs text-slate-800">
                                    {{ $inventory->provinceRelation->name }}
                                </p>
                            </td>
                            <td class="p-2 text-center align-middle border-b whitespace-nowrap">
                                <p class="font-semibold text-xs text-slate-800">
                                    {{ $inventory->operatingUnitRelation->name }}
                                </p>
                            </td>
                            <td class="p-2 text-center align-middle border-b whitespace-nowrap">
                                <p class="font-semibold text-xs text-slate-800">
                                    {{ $inventory->acquisition_date }}
                                </p>
                            </td>
                            <td class="p-2 text-center align-middle border-b whitespace-nowrap">
                                <p class="font-semibold text-xs text-slate-800">
                                    {{ $inventory->statusRelation->name }}
                                </p>
                            </td>
                            <td class="p-2 text-center align-middle border-b whitespace-nowrap">
                                <div class="flex justify-center space-x-2">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('inventory.delete', $inventory->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this inventory item?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


