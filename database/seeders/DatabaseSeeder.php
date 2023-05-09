<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $roomseeder = [
            [
                'room_name' => 'Stellar Space Medium',
                'location' => 'Dago, Bandung',
                'company' => 'Stellar Meetings',
                'room_type' => 'U Shape',
                'room_area' => '10 x 7 m²',
                'extra' => '1 extra-large double bed',
                'person' => '5-10 Person',
                'room_description' => 'Providing lake views, The Symphony 9 Tam Coc in Ninh Binh provides accommodation, an outdoor swimming pool, a bar, a shared lounge, a garden and barbecue facilities. Complimentary WiFi is provided.

                There is a private bathroom with bidet in all units, a',
                'properties1' => 'Speaker',
                'properties2' => 'Projector',
                'properties3' => 'Whiteboard',
                'properties4' => 'Charging port',
                'properties5' => 'Food and Baverage',
                'properties6' => 'Free Cancellation',
                'properties7' => '',
                'properties8' => '',
                'special_note' => '',
                'foto1' => '',
                'foto2' => '',
                'foto3' => '',
                'foto4' => '',
                'price' => 499000,
            ],
            [
                'room_name' => 'Stellar Space Small',
                'location' => 'Cikarang, Bekasi',
                'company' => 'Room Amins',
                'room_type' => 'U Shape',
                'room_area' => '10 x 9 m²',
                'extra' => '1 extra-large double bed',
                'person' => '10-20 Person',
                'room_description' => 'Providing lake views, The Symphony 9 Tam Coc in Ninh Binh provides accommodation, an outdoor swimming pool, a bar, a shared lounge, a garden and barbecue facilities. Complimentary WiFi is provided.

                There is a private bathroom with bidet in all units, a',
                'properties1' => 'Speaker',
                'properties2' => 'Wifi Included',
                'properties3' => 'Whiteboard',
                'properties4' => 'Charging port',
                'properties5' => 'Food and Baverage',
                'properties6' => 'Free Cancellation',
                'properties7' => '',
                'properties8' => '',
                'special_note' => '',
                'foto1' => '',
                'foto2' => '',
                'foto3' => '',
                'foto4' => '',
                'price' => 599000,
            ],
            [
                'room_name' => 'Stellar Space Large',
                'location' => 'Buah Batu, Bandung',
                'company' => 'Stellar Meetings',
                'room_type' => 'U Shape',
                'room_area' => '10 x 10 m²',
                'extra' => '1 extra-large double bed',
                'person' => '20-30 Person',
                'room_description' => 'Providing lake views, The Symphony 9 Tam Coc in Ninh Binh provides accommodation, an outdoor swimming pool, a bar, a shared lounge, a garden and barbecue facilities. Complimentary WiFi is provided.

                There is a private bathroom with bidet in all units, a',
                'properties1' => 'Speaker',
                'properties2' => 'Projector',
                'properties3' => 'Whiteboard',
                'properties4' => 'Charging port',
                'properties5' => 'Food and Baverage',
                'properties6' => 'Free Cancellation',
                'properties7' => 'Wifi Included',
                'properties8' => '',
                'special_note' => '',
                'foto1' => '',
                'foto2' => '',
                'foto3' => '',
                'foto4' => '',
                'price' => 799000,
            ],
            [
                'room_name' => 'Buah Batu Meeting',
                'location' => 'Buah Batu, Bandung',
                'company' => 'Buah Batu Company',
                'room_type' => 'Openspace',
                'room_area' => '10 x 10 m²',
                'extra' => '1 extra-large double bed',
                'person' => '20-30 Person',
                'room_description' => 'Providing lake views, The Symphony 9 Tam Coc in Ninh Binh provides accommodation, an outdoor swimming pool, a bar, a shared lounge, a garden and barbecue facilities. Complimentary WiFi is provided.

                There is a private bathroom with bidet in all units, a',
                'properties1' => 'Speaker',
                'properties2' => 'Projector',
                'properties3' => 'Whiteboard',
                'properties4' => 'Charging port',
                'properties5' => 'Food and Baverage',
                'properties6' => 'Free Cancellation',
                'properties7' => 'Wifi Included',
                'properties8' => '',
                'special_note' => '',
                'foto1' => '',
                'foto2' => '',
                'foto3' => '',
                'foto4' => '',
                'price' => 399000,
            ],
            [
                'room_name' => 'Stellar Lembang Indoor',
                'location' => 'Lembang, Bandung',
                'company' => 'Stellar Meetings',
                'room_type' => 'Indoor',
                'room_area' => '10 x 13 m²',
                'extra' => '1 extra-large double bed',
                'person' => '15-20 Person',
                'room_description' => 'Providing lake views, The Symphony 9 Tam Coc in Ninh Binh provides accommodation, an outdoor swimming pool, a bar, a shared lounge, a garden and barbecue facilities. Complimentary WiFi is provided.

                There is a private bathroom with bidet in all units, a',
                'properties1' => 'Speaker',
                'properties2' => 'Projector',
                'properties3' => 'Whiteboard',
                'properties4' => 'Charging port',
                'properties5' => 'Food and Baverage',
                'properties6' => 'Free Cancellation',
                'properties7' => 'Wifi Included',
                'properties8' => '',
                'special_note' => '',
                'foto1' => '',
                'foto2' => '',
                'foto3' => '',
                'foto4' => '',
                'price' => 459000,
            ],
            [
                'room_name' => 'Stellar Lembang Openspace',
                'location' => 'Grogol, Jakarta Barat',
                'company' => 'Stellar Meetings',
                'room_type' => 'Openspace',
                'room_area' => '10 x 13 m²',
                'extra' => '1 extra-large double bed',
                'person' => '15-20 Person',
                'room_description' => 'Providing lake views, The Symphony 9 Tam Coc in Ninh Binh provides accommodation, an outdoor swimming pool, a bar, a shared lounge, a garden and barbecue facilities. Complimentary WiFi is provided.

                There is a private bathroom with bidet in all units, a',
                'properties1' => 'Speaker',
                'properties2' => 'Projector',
                'properties3' => 'Whiteboard',
                'properties4' => 'Charging port',
                'properties5' => 'Food and Baverage',
                'properties6' => 'Free Cancellation',
                'properties7' => 'Wifi Included',
                'properties8' => '',
                'special_note' => '',
                'foto1' => '',
                'foto2' => '',
                'foto3' => '',
                'foto4' => '',
                'price' => 459000,
            ],
            [
                'room_name' => 'Stellar Cikarang Lounge',
                'location' => 'Cikarang, Bekasi',
                'company' => 'Stellar Meetings',
                'room_type' => 'Lounge',
                'room_area' => '10 x 13 m²',
                'extra' => '1 extra-large double bed',
                'person' => '15-20 Person',
                'room_description' => 'Providing lake views, The Symphony 9 Tam Coc in Ninh Binh provides accommodation, an outdoor swimming pool, a bar, a shared lounge, a garden and barbecue facilities. Complimentary WiFi is provided.

                There is a private bathroom with bidet in all units, a',
                'properties1' => 'Speaker',
                'properties2' => 'Projector',
                'properties3' => 'Whiteboard',
                'properties4' => 'Charging port',
                'properties5' => 'Food and Baverage',
                'properties6' => 'Free Cancellation',
                'properties7' => 'Wifi Included',
                'properties8' => '',
                'special_note' => '',
                'foto1' => '',
                'foto2' => '',
                'foto3' => '',
                'foto4' => '',
                'price' => 459000,
            ],
            [
                'room_name' => 'Stellar Lembang Indoor',
                'location' => 'Batu Nunggal, Bandung',
                'company' => 'Stellar Meetings',
                'room_type' => 'Indoor',
                'room_area' => '10 x 13 m²',
                'extra' => '1 extra-large double bed',
                'person' => '15-20 Person',
                'room_description' => 'Providing lake views, The Symphony 9 Tam Coc in Ninh Binh provides accommodation, an outdoor swimming pool, a bar, a shared lounge, a garden and barbecue facilities. Complimentary WiFi is provided.

                There is a private bathroom with bidet in all units, a',
                'properties1' => 'Speaker',
                'properties2' => 'Projector',
                'properties3' => 'Whiteboard',
                'properties4' => 'Charging port',
                'properties5' => 'Food and Baverage',
                'properties6' => 'Free Cancellation',
                'properties7' => 'Wifi Included',
                'properties8' => '',
                'special_note' => '',
                'foto1' => '',
                'foto2' => '',
                'foto3' => '',
                'foto4' => '',
                'price' => 459000,
            ],
            [
                'room_name' => 'Stellar Mekar Wangi Lounge',
                'location' => 'Mekar Wangi, Bandung',
                'company' => 'Stellar Meetings',
                'room_type' => 'Lounge',
                'room_area' => '10 x 13 m²',
                'extra' => '1 extra-large double bed',
                'person' => '15-20 Person',
                'room_description' => 'Providing lake views, The Symphony 9 Tam Coc in Ninh Binh provides accommodation, an outdoor swimming pool, a bar, a shared lounge, a garden and barbecue facilities. Complimentary WiFi is provided.

                There is a private bathroom with bidet in all units, a',
                'properties1' => 'Speaker',
                'properties2' => 'Projector',
                'properties3' => 'Whiteboard',
                'properties4' => 'Charging port',
                'properties5' => 'Food and Baverage',
                'properties6' => 'Free Cancellation',
                'properties7' => 'Wifi Included',
                'properties8' => '',
                'special_note' => '',
                'foto1' => '',
                'foto2' => '',
                'foto3' => '',
                'foto4' => '',
                'price' => 459000,
            ],
        ];

        Room::insert($roomseeder);
    }
}
