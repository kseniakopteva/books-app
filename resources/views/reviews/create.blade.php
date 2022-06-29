<x-layout>
    <header class="font-semibold m-5 lg:m-0 lg:mb-5">
        <span>Leave a review</span>
        <a href="#tips" class="visible lg:invisible text-red-400 hover:text-red-500 hover:underline">[ Tips below ]</a>
        <br>
        <span class="font-normal text-red-500">Warning: review can be edited and/or deleted only for an hour after posting!</span>
    </header>
    <div class="grid grid-cols-12 gap-5">
        <form action="/books/{{ $book->slug }}/reviews/store" method="POST"
            class="col-span-12 lg:col-span-9 m-5 lg:m-0 lg:mb-5">
            @csrf

            <div class="flex space-x-3">
                {{-- <img src="/images/pfp/{{ auth()->user()->image }}?v={{ time() }}" alt="" width="40" height="40"
                class="rounded-full self-start"> --}}

                <textarea name="body" class="w-full p-4 text-sm focus:outline-none focus:ring-2" cols="30" rows="20"
                    placeholder="What do you have to say?" required></textarea>
            </div>

            @error('body')
                <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror

            <div class="flex justify-start mt-4">
                <x-button>Post</x-button>
            </div>
        </form>
        <div class="col-span-12 lg:col-span-3 m-5 lg:m-0" id="tips">

            <p class="mb-5 italic text-sm">A book review is a <b>guide for potential readers</b>. In a concise manner, a
                review
                summarizes the author’s qualifications and main points, often providing examples from the text. A review
                also provides an opinion on whether the author succeeds or not in convincing readers of his or her
                points. </p>

            <div class="text-xs font-mono leading-tight space-y-2">
                <h4>TIPS:</h4>
                <p>A book review provides three main things: <b>description</b>, <b>analysis</b>, and <b>expression of
                        reviewers’ reactions</b> to the book. </p>

                <p>It begins with an <b>overview of the book</b>; if the author is well known, one or two of their other
                    books might be mentioned here. This is also a good place to write a sentence or two about the
                    <b>book’s purpose</b>. Next, the book reviewer can include <b>background information</b> to help put
                    the book into an understandable context for the reader.
                </p>

                <p>The next section should include a summary of the <b>author’s main points</b>. The author’s words can
                    be paraphrased here, or small sections from the book can be quoted. After this, it is time for the
                    writer to provide an <b>evaluation</b> of the book. In what ways does the book succeed? In what ways
                    does it fail? What, if anything, seems left out? How does it compare to other books on the same
                    topic? Here the writer can provide a <b>personal experience</b> to bolster the evaluation.</p>
                <p>The review ends with a conclusion that concisely summarizes the main points of the review and the
                    main issues it raises.</p>
            </div>
        </div>
    </div>
</x-layout>
