@extends('home.layout.app')
@section('title','home')
@section('content')
    <section class="container px-4 py-4 ">
        <div class="mb-4">
            <h1 class="text-3xl font-semibold">Latest Blogs</h1>
        </div>
         <ul id="blog-container" class=" flex flex-col  max-w-[500px]   divide-y divide-gray-500">
            <div class="blog-loading">loading..</div>
             <li class="blog-template hidden py-4">
                <h6 class="blog-date font-semibold text-gray-600 "></h6>
                <h1 class="blog-title font-normal text-xl"></h1>
                <p class="blog-description"></p>
            </li>
          </ul>
         <script>
             document.addEventListener('DOMContentLoaded',function(){
                fetch('api/blog',{
                    method:'post',
                    headers: {
                      'Content-Type': 'application/json',
                      'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
                }).then(res=>{
                    // console.log(res.json())
                    return res.json();
                }).then(res=>{
                    // console.log(res.data)
                    const post = res.data
                    const blogContainer = document.getElementById('blog-container');
                    const blogTemplate = blogContainer.querySelector('.blog-template');
                    const blogloading = blogContainer.querySelector('.blog-loading').remove();
                    
                    // blogContainer.querySelector('')
                    post.forEach(post=>{
                        const clone = blogTemplate.cloneNode(true);
                        clone.classList.remove('hidden'); // Make visible
                        clone.querySelector('.blog-date').textContent = post.date;
                        clone.querySelector('.blog-title').textContent = post.title;
                        clone.querySelector('.blog-description').textContent = post.description;
                        blogContainer.appendChild(clone);
                    });
                });
             });
         </script>
    </section>
@endsection