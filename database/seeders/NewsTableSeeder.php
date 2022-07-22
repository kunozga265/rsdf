<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::create([
            'title'             =>  ucwords('Biography of the Founder'),
            'slug'              =>  Str::slug("Biography of the Founder")."-".date("Y-m-d"),
            'photo'             =>  'images/news/roberto-chiteta.jpeg',
            'description'       =>  "A brief description of our founder and an overview of their skills, education background and experience.",
            'body'              =>  "
            <h3>About Me</h3>
                <ul>
                    <li>Ability to work well with others and provide excellent communication skills.</li>
                    <li>Work under pressure in a busy environment and resolve conflicts effectively.</li>
                    <li> Knowledgeable and experienced with Internet resources, social media, and Microsoft Office Applications.</li>
                    <li>Ability to apply technical knowledge.</li>
                    <li>Able to build and maintain relationships with clients and other teams.</li>
                </ul>
                <br>
                <h3>Skills</h3>
                <ul>
                    <li>QuickBooks</li>
                    <li>Microsoft Office</li>
                    <li>Operations</li>
                    <li>Communication Skills</li>
                    <li>Adaptability</li>
                    <li>Active Listening Skills</li>
                    <li>Writing Essays</li>
                    <li>Analytical abilities</li>
                    <li>Mathematics, science, and geological knowledge</li>
                    <li>Writing Research Papers on Criminal Justice</li>
                    <li>Ability to draw basic sketches</li>
                    <li>Ability to apply technical knowledge</li>
                    <li>Project management skills</li>
                    <li>Database Management</li>
                    <li>Web & Tech Savvy</li>
                    <li>Management</li>
                    <li>Customer Service</li>
                    <li>Problem Solving</li>
                    <li>Composing Reports</li>
                    <li>Critical Thinking</li>
                    <li>Producing Presentation Slides</li>
                </ul>
            ",
        ]);

        News::create([
            'title'             =>  ucwords('Formation of the NGO'),
            'slug'              =>  Str::slug("Formation of the NGO")."-".date("Y-m-d"),
            'photo'             =>  'images/news/ngo.jpeg',
            'description'       =>  "We engage young people in a constructive manner enabling their initiatives and build their ideas, develop prototype, test and develop products that meet the people’s needs and help reduce the problems and challenges that are faced by most in development sector.",
            'body'              =>  "
            <p>ROBERTO SAVE DREAMS FOUNDATION is a Non-Profit and Non-Governmental Organization
                    initiated in October 2021 to help spearhead community
                    driven development initiatives and enable needy community groups participate in integrated activities to achieve
                    quality livelihood and be self-sustainable.</p>

                <p>RSDF delivers its activities through the power and spirit of
                    voluntarism to build sustainable communities / inter-cultural exchange and thriving villages in African Countries. Our
                    main purpose is to promote youth empowerment, youth
                    employment and information exchange among Zambians,
                    Angolans and other international communities (voluntary
                    work-camps, short and long term volunteering) youth mobility, social inclusion, sports and physical activities, community development, promotion of; peace among our diverse communities; understanding and; unity of purpose.</p>
                <p>RSDF provides services in Entrepreneurship and Development, Information Technology Trainings and Empowerment
                    (ICT, Education, Community Education Centers) Health
                    and Education in HIV & AIDS Management and Awareness,
                    Malaria and TB awareness and Advocacy, Rehabilitation
                    of street children, supporting orphans and vulnerable children, deployment of both local and international volunteers
                    to various community projects, Community Entrepreneurship/ Community Microfinance trainings and Monitoring
                    (Community Savings and loaning) , Capacity Building sessions to youth groups, Vocational schools, Primary and Secondary schools, Organic farming and Agricultural activities,
                    Eco-Tourism, Environmental Education and Management.
                    RSDF harness the development of power for young people by effectively involving them in direct implementation of the core activities that develop their skills, enabling them to become
                    self-reliant and sustainable people in community service and development.</p>
                <p>We engage young people in a constructive
                    manner enabling their initiatives and build
                    their ideas, develop prototype, test and develop products that meet the people’s needs
                    and help reduce the problems and challenges that are faced by most in development
                    sector.</p>
            ",
        ]);
    }
}
