<div class="tw-w-full">
    @if (count($reviews) > 0)
        <div class="swiper mySwiper mask-image tw-w-full">
            <div class="swiper-wrapper">
                @foreach ($reviews as $review)
                    <div class="swiper-slide " style="font-size: unset; font-weight: unset">
                        <div
                            class="tw-w-full tw-h-full tw-max-w-sm tw-border tw-rounded-lg tw-bg-white tw-shadow tw-p-2">
                            <div class="tw-flex tw-flex-col tw-items-center tw-pb-10">
                                <img class="tw-w-24 tw-h-24 tw-mb-3 tw-rounded-full"
                                    src="{{ $review->imagePath !== '' ? $review->imagePath : 'images/avatar.webp' }}"
                                    alt="No Image" />
                                <h5 class="tw-mb-1 tw-text-xl tw-font-medium tw-text-gray-900 dark:tw-text-white">
                                    {{ $review->name }}</h5>
                                <p class="tw-text-center">
                                    {{ substr($review->message, 0, 100) }}{{ strlen($review->message) > 100 ? '...' : '' }}
                                </p>
                                <p
                                    class="tw-text-sm tw-font-normal lg:tw-text-md tw-text-gray-500 tw-text-center dark:tw-text-gray-400">
                                    @for ($i = 0; $i < $review->rating; $i++)
                                        <i class="fa-solid fa-star fa-bounce tw-text-[#ff8a02]"></i>
                                    @endfor
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
        </div>
    @else
        <p class="tw-text-center tw-text-red-500">***No Reviews***</p>
    @endif
</div>
