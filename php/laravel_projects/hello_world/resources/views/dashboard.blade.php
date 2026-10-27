<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <section class="relative isolate overflow-hidden py-12 sm:py-16">
        <div class="absolute inset-x-0 top-0 -z-10 h-72 bg-gradient-to-br from-indigo-100 via-white to-cyan-100 dark:from-indigo-950/40 dark:via-gray-900 dark:to-cyan-950/30"></div>

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mb-8 flex flex-col gap-6 sm:flex-row sm:items-end sm:justify-between">
                <div>
                    <p class="mb-3 text-sm font-semibold uppercase tracking-[0.2em] text-indigo-600 dark:text-indigo-400">
                        Product inventory
                    </p>
                    <h1 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                        Products
                    </h1>
                    <p class="mt-3 max-w-2xl text-sm leading-6 text-gray-600 dark:text-gray-400 sm:text-base">
                        A clear overview of everything in your catalog.
                    </p>
                </div>

                <div class="inline-flex w-fit items-center gap-2 rounded-full border border-indigo-100 bg-white/80 px-4 py-2 text-sm font-medium text-gray-700 shadow-sm backdrop-blur dark:border-indigo-900 dark:bg-gray-800/80 dark:text-gray-200">
                    <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                    {{ $products->count() }} {{ $products->count() === 1 ? 'product' : 'products' }}
                </div>
            </div>

            <div class="overflow-hidden rounded-2xl border border-gray-200/80 bg-white shadow-xl shadow-indigo-950/5 dark:border-gray-700 dark:bg-gray-800">
                <div class="flex items-center justify-between border-b border-gray-100 px-5 py-5 dark:border-gray-700 sm:px-7">
                    <div>
                        <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Your catalog</h2>
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Product details and pricing</p>
                    </div>
                    <div class="hidden rounded-xl bg-indigo-50 p-3 text-indigo-600 dark:bg-indigo-500/10 dark:text-indigo-300 sm:block">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5 12 3 3.75 7.5M20.25 7.5 12 12m8.25-4.5v9L12 21m0-9L3.75 7.5M12 12v9m-8.25-13.5v9L12 21" />
                        </svg>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full min-w-[36rem] text-left">
                        <thead class="bg-gray-50/80 dark:bg-gray-900/40">
                            <tr class="text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">
                                <th scope="col" class="px-5 py-4 sm:px-7">ID</th>
                                <th scope="col" class="px-5 py-4">Name</th>
                                <th scope="col" class="px-5 py-4 text-right sm:px-7">Price</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 dark:divide-gray-700">
                            @forelse ($products as $product)
                                <tr class="transition-colors hover:bg-indigo-50/40 dark:hover:bg-gray-700/40">
                                    <td class="whitespace-nowrap px-5 py-5 text-sm font-medium text-gray-500 dark:text-gray-400 sm:px-7">
                                        #{{ $product->id }}
                                    </td>
                                    <td class="px-5 py-5">
                                        <span class="font-medium text-gray-900 dark:text-white">{{ $product->name }}</span>
                                    </td>
                                    <td class="whitespace-nowrap px-5 py-5 text-right text-sm font-semibold text-gray-900 dark:text-white sm:px-7">
                                        {{ $product->price }} €
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="px-5 py-16 text-center sm:px-7">
                                        <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-indigo-50 text-indigo-600 dark:bg-indigo-500/10 dark:text-indigo-300">
                                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5 12 3 3.75 7.5M20.25 7.5 12 12m8.25-4.5v9L12 21m0-9L3.75 7.5M12 12v9" />
                                            </svg>
                                        </div>
                                        <p class="mt-4 font-semibold text-gray-900 dark:text-white">No products yet</p>
                                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Products you add will appear here.</p>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
