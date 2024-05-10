<?php

namespace App\Helpers;

class Any_Helper
{
	private $data = [];
	private $request;
	public function __construct()
	{
		$this->request = \Config\Services::request();
	}

	/**
	 * Create Meta data
	 * @param string $dataValue
	 */
	public function createMeta(string $dataValue = null, string $titleRental = null, string $image = null): object
	{
		if ($dataValue == null) {
			$this->data = [
				'title' => 'Kamandaka Premium Car',
				'meta' => [
					[
						'name' => 'description',
						'content' => "Kamandaka Premium Car Merupakan Penyedia Jasa Yang Bergerak Di Bidang Pelayanan Rental Mobil Mewah Di Jakarta, Bekasi, dan Sekitarnya Dan Juga Melayani Antar Jemput Ke Tempat Wisata."

					],
					[
						'name' => 'keywords',
						'content' => 'Rental mobil terdekat, Rental, Mobil, rental mobil alphard, rental mobil hiace, rental mobil pajero, rental mobil innova, rental mobil fortuner, rental mobil bekasi, rental mobil jakarta, Kamandaka, Kamandakatrans, Kamandaka Premuium Car, Kamandaka premiumcar, Kamandaka rental, Kamandaka mobil, Kamandaka'
					],
					[
						'name' => 'author',
						'content' => 'Kamandaka Premium Car'
					]
				],
				'metaProperty' => [
					[
						'value' => 'og:image',
						'content' => base_url('/assets/images/Logotype.webp')
					],
					[
						'value' => 'og:image:secure_url',
						'content' => base_url('/assets/images/Logotype.webp')
					],
					[
						'value' => 'og:image:width',
						'content' => '70'
					],
					[
						'value' => 'og:image:height',
						'content' => '70'
					],
					[
						'value' => 'og:url',
						'content' => base_url()
					],
					[
						'value' => 'og:site_name',
						'content' => 'Kamandaka Premium Car'
					],
					[
						'value' => 'og:type',
						'content' => 'website'
					],
					[
						'value' => 'og:locale',
						'content' => 'id_ID'
					],
					[
						'value' => 'og:title',
						'content' => 'Kamandaka Premium Car'
					],
					[
						'value' => 'og:description',
						'content' => "Kamandaka Premium Car Merupakan Penyedia Jasa Yang Bergerak Di Bidang Pelayanan Rental Mobil Mewah Di Jakarta, Bekasi dan Sekitarnya Dan Juga Melayani Antar Jemput Ke Tempat Wisata."
					]
				]
			];
			return $this;
		} elseif ($dataValue == 'rental') {
			$tempTitleRental = $titleRental == "default" || $titleRental == null ? "Kamandaka Premium Car | Rental Mobil" : "Kamandaka Premium Car | Rental Mobil " . ucwords($titleRental);
			$this->data = [
				'title' => $tempTitleRental,
				'meta' => [
					[
						'name' => 'description',
						'content' => "Kamandaka Premium Car Merupakan Penyedia Jasa Yang Bergerak Di Bidang Pelayanan Rental Mobil Mewah Di Jakarta, Bekasi dan Sekitarnya Dan Juga Melayani Antar Jemput Ke Tempat Wisata."

					],
					[
						'name' => 'keywords',
						'content' => 'Rental mobil terdekat, Rental, Mobil, rental mobil jakarta, rental mobil bekasi,  rental mobil alphard, rental mobil hiace, rental mobil pajero, rental mobil innova, rental mobil fortuner, Kamandaka, Kamandakatrans, Kamandaka Premuium Car, Kamandaka premiumcar, Kamandaka rental, Kamandaka mobil, Kamandaka'
					],
					[
						'name' => 'author',
						'content' => 'Kamandaka Premium Car Rental Mobil'
					]
				],
				'metaProperty' => [
					[
						'value' => 'og:image',
						'content' => base_url('/assets/images/car/' . $image)
					],
					[
						'value' => 'og:image:secure_url',
						'content' => base_url('/assets/images/car/' . $image)
					],
					[
						'value' => 'og:image:width',
						'content' => '70'
					],
					[
						'value' => 'og:image:height',
						'content' => '70'
					],
					[
						'value' => 'og:url',
						'content' => $this->getFullPath()
					],
					[
						'value' => 'og:site_name',
						'content' => "Kamandaka Premium Car | Rental Mobil"
					],
					[
						'value' => 'og:type',
						'content' => 'website'
					],
					[
						'value' => 'og:locale',
						'content' => 'id_ID'
					],
					[
						'value' => 'og:title',
						'content' => "Kamandaka Premium Car | Rental Mobil"
					],
					[
						'value' => 'og:description',
						'content' => "Kamandaka Premium Car Merupakan Penyedia Jasa Yang Bergerak Di Bidang Pelayanan Rental Mobil Mewah Di Jakarta, Bekasi dan Sekitarnya Dan Juga Melayani Antar Jemput Ke Tempat Wisata."
					]
				]
			];
			return $this;
		} elseif ($dataValue == 'about') {
			$this->data = [
				'title' => "Kamandaka Premium Car | Tentang Kami",
				'meta' => [
					[
						'name' => 'description',
						'content' => "Kamandaka Premium Car Merupakan Penyedia Jasa Yang Bergerak Di Bidang Pelayanan Rental Mobil Mewah Di Jabodetabek Dan Juga Melayani Antar Jemput Ke Tempat Wisata."

					],
					[
						'name' => 'keywords',
						'content' => 'Rental mobil terdekat, Rental, Mobil, rental mobil, rental mobil bekasi, Kamandaka, Kamandakatrans, Kamandaka Premuium Car, Kamandaka premiumcar, Kamandaka rental, Kamandaka mobil, Kamandaka'
					],
					[
						'name' => 'author',
						'content' => 'Kamandaka Premium Car'
					]
				],
				'metaProperty' => [
					[
						'value' => 'og:image',
						'content' => base_url('assets/images/Logotype.webp')
					],
					[
						'value' => 'og:image:secure_url',
						'content' => base_url('assets/images/Logotype.webp')
					],
					[
						'value' => 'og:image:width',
						'content' => '70'
					],
					[
						'value' => 'og:image:height',
						'content' => '70'
					],
					[
						'value' => 'og:url',
						'content' => $this->getFullPath()
					],
					[
						'value' => 'og:site_name',
						'content' => "Kamandaka Premium Car | Tentang Kami"
					],
					[
						'value' => 'og:type',
						'content' => 'article'
					],
					[
						'value' => 'og:locale',
						'content' => 'id_ID'
					],
					[
						'value' => 'og:title',
						'content' => "Kamandaka Premium Car | Tentang Kami"
					],
					[
						'value' => 'og:description',
						'content' => "Kamandaka Premium Car Merupakan Penyedia Jasa Yang Bergerak Di Bidang Pelayanan Rental Mobil Mewah Di Jabodetabek Dan Juga Melayani Antar Jemput Ke Tempat Wisata."
					]
				]
			];
			return $this;
		}
	}


	/**
	 * Get Meta From createMeta()
	 */
	public function getMeta(): array
	{
		return $this->data;
	}

	/**
	 * get Full URL For meta url
	 */
	public function getFullPath(): string
	{
		$uri = $this->request->getUri();
		$url = $uri->getScheme() . '://' . $uri->getHost() . '/' . $uri->getPath();
		return $url;
	}
	public function limitWords($string, $limit)
	{
		// Split the string into an array of words
		$words = explode(' ', $string);

		// If the number of words is less than or equal to the limit, return the original string
		if (count($words) <= $limit) {
			return $string;
		}

		// Slice the array to get the first $limit words
		$limitedWords = array_slice($words, 0, $limit);

		// Join the limited words back into a string
		$limitedString = implode(' ', $limitedWords);

		return $limitedString;
	}
}

// $data = [
        //     'title'=>'DRIS Rental Mobil',
        //     'meta'=>[
        //         [
        //             'name'=>'description',
        //             'content'=>'DRIS Rental Mobil Premium Cepat Dan Gampang Di Jabodetabek'

        //         ],
        //         [
        //             'name'=>'keywords',
        //             'content'=>'Rental mobil terdekat, Rental, Mobil, rental mobil'
        //         ],
        //         [
        //             'name'=>'author',
        //             'content'=>'DRIS Rental Mobil'
        //         ]
        //     ],
        //     'metaProperty'=>[
        //         [
        //             'value'=>'og:image',
        //             'content'=>base_url('assets/images/web1.png')
        //         ],
        //         [
        //             'value'=>'og:image:secure_url',
        //             'content'=>base_url('assets/images/web1.png')
        //         ],
        //         [
        //             'value'=>'og:image:width',
        //             'content'=>'70'
        //         ],
        //         [
        //             'value'=>'og:image:height',
        //             'content'=>'70'
        //         ],
        //         [
        //             'value'=>'og:url',
        //             'content'=>base_url()
        //         ],
        //         [
        //             'value'=>'og:site_name',
        //             'content'=>'DRIS Rental Mobil'
        //         ],
        //         [
        //             'value'=>'og:type',
        //             'content'=>'website'
        //         ],
        //         [
        //             'value'=>'og:locale',
        //             'content'=>'id_ID'
        //         ],
        //         [
        //             'value'=>'og:title',
        //             'content'=>'DRIS Rental Mobil'
        //         ],
        //         [
        //             'value'=>'og:description',
        //             'content'=>'DRIS Rental Mobil Premium Cepat Dan Gampang Di Jabodetabek'
        //         ]
        //     ]
        //     ];