<div>
    <div class="w-full px-6 mx-auto">
        <div class="relative flex items-center p-0 mt-6 overflow-hidden bg-center bg-cover min-h-75 rounded-2xl"
            style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%">
            <span class="absolute inset-y-0 w-full h-full bg-center bg-cover bg-gradient-fuchsia opacity-60"></span>
        </div>
        <div
            class="relative flex flex-col flex-auto min-w-0 p-4 mx-6 -mt-16 overflow-hidden break-words border-0 shadow-blur rounded-2xl bg-white/80 bg-clip-border backdrop-blur-2xl backdrop-saturate-200">
            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-auto max-w-full px-3">
                    <div
                        class="text-size-base ease-soft-in-out h-18.5 w-18.5 relative inline-flex items-center justify-center rounded-xl text-white transition-all duration-200">
                        <img src="../assets/img/logos/DILG_logo.png" alt="profile_image"
                            class="w-full shadow-soft-sm rounded-xl" />
                    </div>
                </div>
                <div class="flex-none w-auto max-w-full px-3 my-auto">
                    <div class="h-full">
                        {{-- <h5 class="mb-1">{{ $user->name }}</h5> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-wrap mt-6 -mx-3">
        <div class="w-full px-3 mb-6 e">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <h3 class="font-bold py-3">Adding Inventory</h3>
                    <h5 class="font-bold py-3">Personnel Information</h5>

                    <form wire:submit="save">

                        <div class="flex flex-wrap -mx-3">

                            {{-- L-1 --}}
                            <div class="max-w-full px-3 w-1/2 lg:flex-none">
                                <div class="flex flex-col h-full">
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
                                        Accountable Personnel
                                    </h6>
                                    <div class="mb-4">
                                        <input wire:model.blur="inventory.accountable_personnel_id" type="text"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="Accountable Personnel ID" id="accountable-personnel-id"
                                            required />
                                        @error('inventory.accountable_personnel_id')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Division
                                    </h6>

                                    <div class="mb-4">
                                        <input wire:model.blur="inventory.division_id" type="text"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="Division ID" id="division-id" required />
                                        @error('inventory.division_id')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- L-1 --}}


                            {{-- R-1 --}}
                            <div class="max-w-full px-3 w-1/2 lg:flex-none">
                                <div class="flex flex-col h-full">
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Province
                                    </h6>

                                    <div class="mb-4">
                                        <input wire:model.blur="inventory.province_id" type="text"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="Province ID" id="province-id" required />
                                        @error('inventory.province_id')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Operating
                                        Unit
                                    </h6>

                                    <div class="mb-4">
                                        <input wire:model.blur="inventory.operating_unit_id" type="text"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="Operating Unit ID" id="operating-unit-id" required />
                                        @error('inventory.operating_unit_id')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- R-1 --}}
                        </div>
                        <h5 class="font-bold py-3">Item Information
                        <div class="flex flex-wrap -mx-3">
                            {{-- L-2 --}}
                            <div class="max-w-full px-3 w-1/2 lg:flex-none">
                                <div class="flex flex-col h-full">
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Make
                                    </h6>
                                    <div class="mb-4">
                                        <input wire:model.blur="inventory.make_id" type="text"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="Make ID" id="make-id" required />
                                        @error('inventory.make_id')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Type
                                    </h6>

                                    <div class="mb-4">
                                        <input wire:model.blur="inventory.type_id" type="text"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="Type ID" id="type-id" required />
                                        @error('inventory.type_id')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Serial
                                        Number
                                    </h6>
                                    <div class="mb-4">
                                        <input wire:model.blur="inventory.serial_number" type="text"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="Serial Number" id="serial-number" />
                                        @error('inventory.serial_number')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>


                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
                                        Description</h6>
                                    <div class="mb-4">
                                        <textarea wire:model.blur="inventory.description"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="Description" id="description" rows="3">{{ old('inventory.description') }}</textarea>
                                        @error('inventory.description')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>



                                </div>
                            </div>
                            {{-- L-2 --}}


                            {{-- R-2 --}}
                            <div class="max-w-full px-3 w-1/2 lg:flex-none">
                                <div class="flex flex-col h-full">
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Brand
                                    </h6>

                                    <div class="mb-4">
                                        <input wire:model.blur="inventory.brand" type="text"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="Brand" id="brand" />
                                        @error('inventory.brand')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Model
                                        </h6>

                                    <div class="mb-4">
                                        <input wire:model.blur="inventory.model" type="text"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="Model" id="models" />
                                        @error('inventory.model')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                            {{-- R-2 --}}

                        </div>



                        <h5 class="font-bold py-3">Additional Information
                        </h5>

                        <div class="flex flex-wrap -mx-3">
                            <div class="max-w-full px-3 w-1/2 lg:flex-none">
                                <div class="flex flex-col h-full">


                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Property
                                        Number
                                    </h6>
                                    <div class="mb-4">
                                        <input wire:model.blur="inventory.property_number" type="number"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="Property Number" id="property-number" />
                                        @error('inventory.property_number')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>


                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
                                        Acquisition Date</h6>

                                    <div class="mb-4">
                                        <input wire:model.blur="inventory.acquisition_date" type="date"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            id="acquisition-date" required />
                                        @error('inventory.acquisition_date')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Balance Per Card
                                    </h6>
                                    <div class="mb-4">
                                        <input wire:model.blur="inventory.balance_per_card" type="number" step="0.01"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="Balance Per Card" id="balance_per_card" required />
                                        @error('inventory.amount')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Source
                                    </h6>

                                    <div class="mb-4">
                                        <input wire:model.blur="inventory.source" type="text"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="source" id="source" />
                                        @error('inventory.source')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
                                        Remarks</h6>
                                    <div class="mb-4">
                                        <textarea wire:model.blur="inventory.remarks"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="Remarks" id="remarks" rows="4">{{ old('inventory.remarks') }}</textarea>
                                        @error('inventory.remarks')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>


                                </div>
                            </div>
                            <div class="max-w-full px-3 w-1/2 lg:flex-none">
                                <div class="flex flex-col h-full">
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Unit Value
                                    </h6>

                                    <div class="mb-4">
                                        <input wire:model.blur="inventory.unit_value" type="number" min="1"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="Unit Value" id="unit_value" required />
                                        @error('inventory.unit_value')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Year Acquired</h6>

                                    <div class="mb-4">
                                        <input wire:model.blur="inventory.year_acquired" type="text"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="Year Acquired (e.g., 2024)" id="year_acquired" pattern="\d{4}" required />
                                        @error('inventory.year_acquired')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    

                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">On Hand Per Count</h6>

                                    <div class="mb-4">
                                        <input wire:model.blur="inventory.on_hand_per_count" type="number" min="0" step="1"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="On Hand Per Count" id="on_hand_per_count" required />
                                        @error('inventory.on_hand_per_count')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>                                    

                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Status</h6>

                                    <div class="mb-4">
                                        <input wire:model.blur="inventory.status_id" type="text"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="Status" id="inventory_status" required />
                                        @error('inventory.status_id')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6">
                            <button type="submit"
                                class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
