<?php

namespace spec\Game;

use Game\Anagram;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AnagramSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Anagram::class);
    }
    function it_should_return_true_for_valid_anagram()
    {
        $string1 = 'pera';
        $string2 = 'pera';
        $this->isAnagram($string1, $string2)
            ->shouldBe(true);
    }
    function it_sould_return_false_for_different_len()
    {
        $string1 = 'aaaaaa';
        $string2 = 'pera';
        $this->isAnagram($string1, $string2)
            ->shouldBe(false);
    }

    function it_should_return_false_for_same_len_invalid()
    {
        $string1 = 'aaaa';
        $string2 = 'pera';
        $this->isAnagram($string1, $string2)
            ->shouldBe(false);
    }
    function it_should_return_true_for_same_len_valid()
    {
        $string1 = 'admirer';
        $string2 = 'married';
        $this->isAnagram($string1, $string2)
            ->shouldBe(true);
    }
    function it_is_ok_with_caps_letters()
    {
        $string1 = 'RaPe';
        $string2 = 'pEra';
        $this->isAnagram($string1, $string2)
            ->shouldBe(true);
    }
    function it_has_spaces()
    {
        $string1 = 'AstroNomers';
        $string2 = 'no more stars';
        $this->isAnagram($string1, $string2)
            ->shouldBe(true);
    }

    function it_no_input()
    {
        $string1 = '';
        $string2 = 'no more stars';
        $this->isAnagram($string1, $string2)
            ->shouldBe(false);
    }

    function it_array_instead_of_stirng()
    {
        $string1 = ['test'];
        $string2 = 'no more stars';
        $this->isAnagram($string1, $string2)
            ->shouldBe(false);
    }

    function it_obj_istead_of_string()
    {
        $string1 = new \stdClass;
        $string2 = 'no more stars';
        $this->isAnagram($string1, $string2)
            ->shouldBe(false);
    }
    function it_boolean()
    {
        $string1 = true;
        $string2 = true;
        $this->isAnagram($string1, $string2)
            ->shouldBe(false);
    }   
}
