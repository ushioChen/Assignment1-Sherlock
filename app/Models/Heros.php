<?php

namespace App\Models;

class Heros {
    protected $data = [
        '1' => [
            'id' => 1,
            'name' => 'Sherlock·Holmes',
            'description' => 'Self-described as a "consulting detective", he shares apartment 221B B Baker Street with Dr.Watson and stays in the apartment, waiting for police advice or following cases in the newspaper and on the Internet. He is usually dressed in a black suit over a long black tweed trench coat and a dark blue scarf. He is quick-witted, perceptive to every detail, and knowledgeable. Whenever the face of the complex mystery of the case is unusually excited, see solving the case as a means to achieve the value of life, to solve the case, no one else to interfere or deny, to stick to nicotine patches to keep thinking excited. Good at reasoning, violin and fighting arts, deductive method to deduce the case, personal website named "deductive method of research", often published on it some solve the case of experience. He is strong, self-confident, arrogant and hates authority. However, he is actually quite concerned about the people around him and shows more human warmth than the original Sherlock Holmes, who regards Watson as his "only friend".Translated with www.DeepL.com/Translator (free version)',
            'link' => 'http://www.discoverhongkong.com/eng/index.jsp',
            'image' => 'sherlock.jpg',
        ],
        '2' => [
            'id' => 2,
            'name' => 'John H.Watson',
            'description' => 'Retired army doctor, formerly of the 5th Northumberland Open Fire Regiment, roommate, best friend and assistant to Sherlock Holmes, with whom he shares flat 221B B Baker Street. He is a stable, gentle, and friendly person, but is strong and determined when it comes to solving crimes, usually helping Sherlock with his investigations or catching criminals together. He admires and trusts Sherlock and is willing to help him despite his complaints about his style. Sherlock reputation has been enhanced by Watson blogging of many of their cases.',
            'link' => 'http://en.macaotourism.gov.mo/index.php',
            'image' => 'john.jpg',
        ],
        '3' => [
            'id' => 3,
            'name' => 'James Moriarty',
            'description' => 'Claims to be a "consulting criminal". Smart, cunning, discreet, and has numerous men in his employ. He sees Sherlock Holmes as his enemy, and all cases are linked to him in one way or another. Created a series of cases, even threatening people close to Sherlock and Watson, just to defeat Sherlock once and for all.',
            'link' => 'http://www.tourismthailand.org/',
            'image' => 'moyi.jpg',
        ],
        '4' => [
            'id' => 4,
            'name' => 'Mycroft Holmes',
            'description' => 'Sherlock s own brother, a senior British government official (MI6). At first, he tries to bribe Watson to spy on Sherlock, but when he is rejected, he secretly places protection officers around Sherlock and Watson. But when Sherlock does something out of the ordinary, Mycroft still feels a sense of hatred and resentment towards him.',
            'link' => 'http://www.jnto.go.jp/eng/',
            'image' => 'maige.jpg',
        ],
        '5' => [
            'id' => 5,
            'name' => 'Mary Morstan',
            'description' => 'Watson s wife, formerly an agent, survives in England under the assumed name of a dead woman..',
            'link' => 'http://www.vietnamtourism.gov.vn/english/',
            'image' => 'marry.jpg',
        ],
        '6' => [
            'id' => 6,
            'name' => 'Irene Adler',
            'description' => 'The only woman among those who defeated Sherlock Holmes, the woman Sherlock admired most in his life and saw as a formidable opponent..',
            'link' => 'http://www.vietnamtourism.gov.vn/english/',
            'image' => 'irene.jpg',
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
