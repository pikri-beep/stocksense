@extends('layouts.app')

@section('content')
<section class="mx-auto max-w-7xl px-4 text-[#0F172A] sm:px-6 lg:px-8">
    <div class="grid gap-12 lg:grid-cols-[1.2fr_0.8fr] lg:items-center">
        <div class="space-y-8">
            <div
                class="inline-flex items-center rounded-full bg-[#E0F2FE] px-4 py-2 text-sm font-medium text-[#0369A1] ring-1 ring-[#B6E0FE]">
                <span class="mr-2">New</span>
                <span>Powered by AI insights</span>
            </div>

            <div class="space-y-6">
                <h1 class="max-w-3xl text-4xl font-semibold tracking-tight text-[#0F172A] sm:text-5xl">Understand
                    stock trends with intelligent charts, predictions, and market signals.</h1>
                <p class="max-w-2xl text-base leading-8 text-[#475569]">StockSense combines market data, technical
                    indicators, and AI-powered analysis in one modern dashboard. Start building your watchlist and
                    exploring market moves.</p>
            </div>

            <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                <a href="#"
                    class="inline-flex items-center justify-center rounded-full bg-[#2563EB] px-6 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-[#1D4ED8]">Get
                    started</a>
                <a href="#features"
                    class="inline-flex items-center justify-center rounded-full border border-[#CBD5E1] bg-white px-6 py-3 text-sm font-semibold text-[#0F172A] transition hover:border-[#94A3B8]">View
                    features</a>
            </div>
        </div>

        <div class="rounded-[2rem] bg-[#F8FAFC] p-6 shadow-md ring-1 ring-[#E2E8F0]">
            <div class="space-y-4">
                <div class="rounded-3xl bg-white p-6 shadow-sm">
                    <div class="flex items-center justify-between gap-4">
                        <div>
                            <p class="text-sm font-semibold text-[#0F172A]">Market Pulse</p>
                            <p class="text-sm text-[#64748B]">Real-time stock overview</p>
                        </div>
                        <span
                            class="rounded-full bg-[#ECFDF5] px-3 py-1 text-sm font-semibold text-[#166534]">+1.8%</span>
                    </div>
                    <div class="mt-6 h-40 rounded-3xl bg-gradient-to-r from-[#EFF6FF] to-[#DBEAFE]" />
                </div>

                <div class="grid gap-4 sm:grid-cols-2">
                    <div class="rounded-3xl bg-white p-5 shadow-sm">
                        <p class="text-sm font-semibold text-[#0F172A]">Watchlist</p>
                        <p class="mt-3 text-3xl font-semibold text-[#0F172A]">12</p>
                        <p class="mt-2 text-sm text-[#64748B]">Tracked stocks</p>
                    </div>
                    <div class="rounded-3xl bg-white p-5 shadow-sm">
                        <p class="text-sm font-semibold text-[#0F172A]">Signals</p>
                        <p class="mt-3 text-3xl font-semibold text-[#0F172A]">8</p>
                        <p class="mt-2 text-sm text-[#64748B]">Trading insights today</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection