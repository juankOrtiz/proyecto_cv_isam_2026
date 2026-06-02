@props(['title', 'description', 'techs' => []])

<div class="bg-slate-800 border border-slate-700 rounded-xl overflow-hidden hover:shadow-lg hover:border-indigo-500/50 transition-all duration-300 flex flex-col justify-between p-5">
    <div>
        <h3 class="text-lg font-bold text-white mb-2">{{ $title }}</h3>
        <p class="text-slate-400 text-sm line-clamp-3 mb-4">
            {{ $description }}
        </p>
    </div>
    
    <div>
        <div class="flex flex-wrap gap-1.5 mb-4">
            @foreach($techs as $tech)
                <span class="bg-indigo-500/10 text-indigo-400 text-xs px-2 py-0.5 rounded-full border border-indigo-500/20">
                    {{ $tech }}
                </span>
            @endforeach
        </div>

        <div class="flex text-xs">
            <a href="#" class="bg-indigo-650 hover:bg-indigo-600 text-white font-medium px-3 py-1.5 rounded transition-colors w-full text-center">Ver Proyecto</a>
        </div>
    </div>
</div>