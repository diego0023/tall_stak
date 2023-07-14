<div>
    <div x-data="{ open: false }">
        <button class="rounded-xl bg-blue-400 h-12 w-[100px] font-semibold"  @click="open = ! open">Toggle Content</button>
        <div x-show="open">
            Content...
        </div>
    </div>
</div>
