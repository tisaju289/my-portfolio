
@foreach ($projects as $project)
<div
  class="col-span-12 md:col-span-6 lg:col-span-4"
  data-aos="fade-up"
  data-aos-delay="200"
  >
  <div class="group rounded-2xl bg-btn p-[30px]">
    <div class="overflow-hidden rounded-2xl">
      <img

        src="{{asset('assets/images/projects/project-3.png')}}"
        alt="Lariv - React Portfolio Template"
        class="w-full object-cover transition-all duration-500 group-hover:scale-[110%]"
      />
    </div>
    <div>
      <p class="mt-[16px] text-[14px] text-text">
        {{ $project->shor_name}}
      </p>
      <div
        class="portfolio-button-open cursor-pointer text-white transition-all duration-300 hover:text-theme"
      >
        <a href="{{ $project->github_link}}" target="_blank">
          <h2
            class="mt-[15px] text-[20px] font-medium capitalize md:text-[20px]"
          >
          {{ $project->title}} by <br> {{ $project->technologies}}
          </h2>
        </a>
      </div>
    </div>
  </div>
</div>

@endforeach