<?php
namespace App\Models;

/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class People {

    //mock data : an array of records
    protected $data = [
        '1' => [
            'id' => 1,
            'name' => 'Aaron Hochner',
            'country' =>'United States',
            'brith' =>'November 2, 1965',
            'setting' =>'The BAU team leader',
            'description' => ' The BAU team leader is serious and responsible, with a clear distinction between public and private, and his integrity. Although as the administrative leader of BAU, he still insists on letting the more senior Gideon lead the profiling work, and he only reflects the value of the supervisor in the administration and personnel organization. In front of superiors, Aaron is able to fully protect the team members and give them the maximum freedom to play; in terms of business, he is also competent enough, in addition to excellent profiling ability, he is also good at interrogation and negotiation, and he is also a Sharpshooter.',
            'disposition' =>'There is a clear distinction between public and private, and no integrity',
            'link' => 'https://baike.baidu.com/item/%E4%BA%9A%E4%BC%A6%C2%B7%E9%9C%8D%E5%A5%87%E7%BA%B3',
            'image' => 'Hochner.jpg',
        ],
        '2' => [
            'id' => 2,
            'name' => 'Derek Morgan',
            'country' =>'Britain',
            'brith' =>'June 6, 1973',
            'setting' =>'The BAU team leader',
            'setting' =>'role playing, which means thinking from the perspective of a criminal',
            'description' => ' Morgans specialty is role-playing. He will think from the perspective of a criminal at the crime scene or at the home of a suspect, reproduce the criminals every move, and study the psychological state behind these actions. In addition, he is also a judo black belt player with strong close combat ability. His humorous and charming temperament makes him handsome and sexy, favored by women.',
            'disposition' =>'Humorous',
            'link' => 'https://baike.baidu.com/item/%E5%BE%B7%E7%91%9E%E5%85%8B%C2%B7%E8%8E%AB%E6%A0%B9',
            'image' => 'Morgan.jpg',
        ],
        '3' => [
            'id' => 3,
            'name' => 'Dr.Spencer Reid',
            'country' =>'Canada',
            'brith' =>'October 9, 1981',
            'setting' =>'The BAU team leader',
            'description' => 'Doctor of genius, with three doctoral titles (respectively in chemistry, mathematics and engineering), as well as a bachelors degree in psychology, philosophy and sociology, with an IQ of 187, exceptionally clear memory, and the ability to read 20,000 words per minute. But his EQ is so low, just as his IQ is so high. Even so, he is also the darling of the entire analysis team, because he is kind and he makes people unconsciously produce compassion.',
            'disposition' =>'Kind, smart',
            'link' => 'https://baike.baidu.com/item/%E6%96%AF%E6%BD%98%E5%A1%9E%C2%B7%E7%91%9E%E5%BE%B7',
            'image' => 'Reid.jpg',
        ],
        '4' => [
            'id' => 4,
            'name' => 'David Rossi',
            'country' =>'Italy',
            'brith' =>'May 9, 1956',
            'setting' =>'One of the founders of BAU, a veteran',
            'description' => ' The Italians seem to be handy for football, cooking, and mafia. (The professional course: Criminal Justice) was originally one of the founders of BAU, a veteran, after retirement, he wrote speeches and books. Because of an unfinished case, he was guilty of an unfinished case. Later, he replaced Gideon who had left, returned to BAU to play his residual heat, and gradually merged into the big family of BAU. The relationship with Hotch is the predecessor. Therefore, the two call each other by their first name.',
            'disposition' =>'Wise',
            'link' => 'https://baike.baidu.com/item/%E5%A4%A7%E5%8D%AB%C2%B7%E7%BD%97%E8%A5%BF/311984',
            'image' => 'Rossi.jpg',
        ],
        '5' => [
            'id' => 5,
            'name' => 'Jennifer Jeanne (JJ)',
            'country' =>'USA',
            'brith' =>'October 11, 1979',
            'setting' =>' The departments external liaison officer and colleagues',
            'description' => ' The departments external liaison officer and colleagues called her "JJ". JJ is calm, upright and courageous, good at communicating with family members. As the team’s external window, her duty is to review the cases sent by the police from all over the country, and select the most valued cases for BAU’s psychological analysis. At the same time, she is also the window for the team to interact with the local police and the media when necessary. She will also act as the police spokesperson.',
            'disposition' =>'Be calm and courageous when things happen.',
            'link' => 'https://baike.baidu.com/item/%E7%8F%8D%E5%A6%AE%E5%BC%97%C2%B7%E8%AE%A9%E7%83%AD',
            'image' => 'Jennifer.jpg',
        ],
        '6' => [
            'id' => 6,
            'name' => 'Emily Plantes',
            'country' =>'Britain',
            'brith' =>'October 12, 1970',
            'setting' =>'The BAU menber',
            'description' => ' Morgans specialty is role-playing. He will think from the perspective of a criminal at the crime scene or at the home of a suspect, reproduce the criminals every move, and study the psychological state behind these actions. In addition, he is also a judo black belt player with strong close combat ability. His humorous and charming temperament makes him handsome and sexy, favored by women.',
            'disposition' =>'Brave and fearless, hearty and generous.',
            'link' => 'https://baike.baidu.com/item/%E8%89%BE%E7%B1%B3%E8%8E%89%C2%B7%E6%99%AE%E5%85%B0%E8%92%82%E6%96%AF',
            'image' => 'Emily.jpg',
        ],
    ];

    public function findAll() {
        return $this->data;
    }

    public function find($id = null) {
        if (!empty($id) && isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }

}
