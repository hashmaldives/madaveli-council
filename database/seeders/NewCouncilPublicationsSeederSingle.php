<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NewCouncilPublicationsSeederSingle extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Publication::create([
            'created_at' => '2022-07-19 21:42:01',
            'title_en' => 'WDC Spontaneous Meeting Minutes One',
            'title_dh' => 'އަންހެނުންގެ ތަރައްގީއަށް މަސައްކަތްކުރާ ކޮމެޓީގެ ކުއްލި ޖަލްސާތަކުގެ ޔައުމިއްޔާ އެކެއް',
            'number' => 'DOC/2023/001',
            'main_pdf' => '1',
            'publication_category_id' => '35',
            'attachment' => '[{"layout":"documentattachmentlayout","key":"9ef0bFPR2yVb8BhQ","attributes":{"title_en":"Attachment One","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u0787\u07ac\u0786\u07ac\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"k0cNXMJiaGWea4ol","attributes":{"title_en":"Attachment Two","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078b\u07ad\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"eRV1uaZqDyaupo1n","attributes":{"title_en":"Attachment Three","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078c\u07a8\u0782\u07ac\u0787\u07b0","attachment":"1"}}]',
            'content_en' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec blandit leo, nec pretium dui. Nam tincidunt porta eros, ut euismod massa iaculis a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui odio, blandit eget hendrerit eleifend, volutpat id felis. Aenean elementum nisl eget tincidunt posuere. In fermentum venenatis nisi in fermentum. Fusce sagittis consequat ultricies. Quisque et metus vel urna dictum aliquet. Morbi tempor, orci aliquam molestie feugiat, ligula urna bibendum velit, cursus vehicula tellus lectus sit amet massa. Pellentesque rutrum placerat feugiat.&nbsp;</p>',
            'content_dh' => '<p>(މި ލިޔުމަކީ ލެޓިން އިން ޓްރާންސްލޭޓް ކޮއްފައިވާ ޑަމީ ޓެކްސްޓް ކޮޅެކެވެ) ފަހަރެއްގައި ބޯޅައަށް، ކާޓޫނަށް ނުވަތަ ތިމާވެއްޓާމެދުގެ ވިސްނުން މުހިންމުވެދާނެ، މާސް ވިހަވުން އިތުރުވެގެން ދިއުމަކީ އެކަށީގެންވާ ކަމެކެވެ. ފައުލް ކުރުމާ ހަމައަށް އަދި އޭގެ ކުރިންނެވެ. ފުޓްބޯޅައިގެ ކުރިން ފުޓްބޯޅަ ވަރަށް ގިނަ. އެކަމަކު ފުރާވަރުގެ ކުދިންނާއި އެއީ އެކަމަކު ޕްރޮޓީން. އެއީ އަބަދުވެސް އޮންނަ އެއްޗެކެވެ. ކްރާސް އެލިފެންޑް، އޮގް އެޓް އެލިފެންޑް ޕެލެންޓެސްކް.</p>'
        ]);
        \App\Models\Publication::create([
            'created_at' => '2022-07-19 21:42:02',
            'title_en' => 'WDC Spontaneous Meeting Minutes Two',
            'title_dh' => 'އަންހެނުންގެ ތަރައްގީއަށް މަސައްކަތްކުރާ ކޮމެޓީގެ ކުއްލި ޖަލްސާތަކުގެ ޔައުމިއްޔާ ދޭއް',
            'number' => 'DOC/2023/002',
            'main_pdf' => '1',
            'publication_category_id' => '35',
            'attachment' => '[{"layout":"documentattachmentlayout","key":"9ef0bFPR2yVb8BhQ","attributes":{"title_en":"Attachment One","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u0787\u07ac\u0786\u07ac\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"k0cNXMJiaGWea4ol","attributes":{"title_en":"Attachment Two","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078b\u07ad\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"eRV1uaZqDyaupo1n","attributes":{"title_en":"Attachment Three","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078c\u07a8\u0782\u07ac\u0787\u07b0","attachment":"1"}}]',
            'content_en' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec blandit leo, nec pretium dui. Nam tincidunt porta eros, ut euismod massa iaculis a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui odio, blandit eget hendrerit eleifend, volutpat id felis. Aenean elementum nisl eget tincidunt posuere. In fermentum venenatis nisi in fermentum. Fusce sagittis consequat ultricies. Quisque et metus vel urna dictum aliquet. Morbi tempor, orci aliquam molestie feugiat, ligula urna bibendum velit, cursus vehicula tellus lectus sit amet massa. Pellentesque rutrum placerat feugiat.&nbsp;</p>',
            'content_dh' => '<p>(މި ލިޔުމަކީ ލެޓިން އިން ޓްރާންސްލޭޓް ކޮއްފައިވާ ޑަމީ ޓެކްސްޓް ކޮޅެކެވެ) ފަހަރެއްގައި ބޯޅައަށް، ކާޓޫނަށް ނުވަތަ ތިމާވެއްޓާމެދުގެ ވިސްނުން މުހިންމުވެދާނެ، މާސް ވިހަވުން އިތުރުވެގެން ދިއުމަކީ އެކަށީގެންވާ ކަމެކެވެ. ފައުލް ކުރުމާ ހަމައަށް އަދި އޭގެ ކުރިންނެވެ. ފުޓްބޯޅައިގެ ކުރިން ފުޓްބޯޅަ ވަރަށް ގިނަ. އެކަމަކު ފުރާވަރުގެ ކުދިންނާއި އެއީ އެކަމަކު ޕްރޮޓީން. އެއީ އަބަދުވެސް އޮންނަ އެއްޗެކެވެ. ކްރާސް އެލިފެންޑް، އޮގް އެޓް އެލިފެންޑް ޕެލެންޓެސްކް.</p>'
        ]);
        \App\Models\Publication::create([
            'created_at' => '2022-07-19 21:42:03',
            'title_en' => 'WDC Spontaneous Meeting Minutes Three',
            'title_dh' => 'އަންހެނުންގެ ތަރައްގީއަށް މަސައްކަތްކުރާ ކޮމެޓީގެ ކުއްލި ޖަލްސާތަކުގެ ޔައުމިއްޔާ ތިނެއް',
            'number' => 'DOC/2023/003',
            'main_pdf' => '1',
            'publication_category_id' => '35',
            'attachment' => '[{"layout":"documentattachmentlayout","key":"9ef0bFPR2yVb8BhQ","attributes":{"title_en":"Attachment One","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u0787\u07ac\u0786\u07ac\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"k0cNXMJiaGWea4ol","attributes":{"title_en":"Attachment Two","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078b\u07ad\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"eRV1uaZqDyaupo1n","attributes":{"title_en":"Attachment Three","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078c\u07a8\u0782\u07ac\u0787\u07b0","attachment":"1"}}]',
            'content_en' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec blandit leo, nec pretium dui. Nam tincidunt porta eros, ut euismod massa iaculis a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui odio, blandit eget hendrerit eleifend, volutpat id felis. Aenean elementum nisl eget tincidunt posuere. In fermentum venenatis nisi in fermentum. Fusce sagittis consequat ultricies. Quisque et metus vel urna dictum aliquet. Morbi tempor, orci aliquam molestie feugiat, ligula urna bibendum velit, cursus vehicula tellus lectus sit amet massa. Pellentesque rutrum placerat feugiat.&nbsp;</p>',
            'content_dh' => '<p>(މި ލިޔުމަކީ ލެޓިން އިން ޓްރާންސްލޭޓް ކޮއްފައިވާ ޑަމީ ޓެކްސްޓް ކޮޅެކެވެ) ފަހަރެއްގައި ބޯޅައަށް، ކާޓޫނަށް ނުވަތަ ތިމާވެއްޓާމެދުގެ ވިސްނުން މުހިންމުވެދާނެ، މާސް ވިހަވުން އިތުރުވެގެން ދިއުމަކީ އެކަށީގެންވާ ކަމެކެވެ. ފައުލް ކުރުމާ ހަމައަށް އަދި އޭގެ ކުރިންނެވެ. ފުޓްބޯޅައިގެ ކުރިން ފުޓްބޯޅަ ވަރަށް ގިނަ. އެކަމަކު ފުރާވަރުގެ ކުދިންނާއި އެއީ އެކަމަކު ޕްރޮޓީން. އެއީ އަބަދުވެސް އޮންނަ އެއްޗެކެވެ. ކްރާސް އެލިފެންޑް، އޮގް އެޓް އެލިފެންޑް ޕެލެންޓެސްކް.</p>'
        ]);
        \App\Models\Publication::create([
            'created_at' => '2022-07-19 21:42:04',
            'title_en' => 'WDC Spontaneous Meeting Minutes Four',
            'title_dh' => 'އަންހެނުންގެ ތަރައްގީއަށް މަސައްކަތްކުރާ ކޮމެޓީގެ ކުއްލި ޖަލްސާތަކުގެ ޔައުމިއްޔާ ހަތަރެއް',
            'number' => 'DOC/2023/004',
            'main_pdf' => '1',
            'publication_category_id' => '35',
            'attachment' => '[{"layout":"documentattachmentlayout","key":"9ef0bFPR2yVb8BhQ","attributes":{"title_en":"Attachment One","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u0787\u07ac\u0786\u07ac\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"k0cNXMJiaGWea4ol","attributes":{"title_en":"Attachment Two","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078b\u07ad\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"eRV1uaZqDyaupo1n","attributes":{"title_en":"Attachment Three","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078c\u07a8\u0782\u07ac\u0787\u07b0","attachment":"1"}}]',
            'content_en' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec blandit leo, nec pretium dui. Nam tincidunt porta eros, ut euismod massa iaculis a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui odio, blandit eget hendrerit eleifend, volutpat id felis. Aenean elementum nisl eget tincidunt posuere. In fermentum venenatis nisi in fermentum. Fusce sagittis consequat ultricies. Quisque et metus vel urna dictum aliquet. Morbi tempor, orci aliquam molestie feugiat, ligula urna bibendum velit, cursus vehicula tellus lectus sit amet massa. Pellentesque rutrum placerat feugiat.&nbsp;</p>',
            'content_dh' => '<p>(މި ލިޔުމަކީ ލެޓިން އިން ޓްރާންސްލޭޓް ކޮއްފައިވާ ޑަމީ ޓެކްސްޓް ކޮޅެކެވެ) ފަހަރެއްގައި ބޯޅައަށް، ކާޓޫނަށް ނުވަތަ ތިމާވެއްޓާމެދުގެ ވިސްނުން މުހިންމުވެދާނެ، މާސް ވިހަވުން އިތުރުވެގެން ދިއުމަކީ އެކަށީގެންވާ ކަމެކެވެ. ފައުލް ކުރުމާ ހަމައަށް އަދި އޭގެ ކުރިންނެވެ. ފުޓްބޯޅައިގެ ކުރިން ފުޓްބޯޅަ ވަރަށް ގިނަ. އެކަމަކު ފުރާވަރުގެ ކުދިންނާއި އެއީ އެކަމަކު ޕްރޮޓީން. އެއީ އަބަދުވެސް އޮންނަ އެއްޗެކެވެ. ކްރާސް އެލިފެންޑް، އޮގް އެޓް އެލިފެންޑް ޕެލެންޓެސްކް.</p>'
        ]);
        \App\Models\Publication::create([
            'created_at' => '2022-07-19 21:42:05',
            'title_en' => 'WDC Spontaneous Meeting Minutes Five',
            'title_dh' => 'އަންހެނުންގެ ތަރައްގީއަށް މަސައްކަތްކުރާ ކޮމެޓީގެ ކުއްލި ޖަލްސާތަކުގެ ޔައުމިއްޔާ ފަހެއް',
            'number' => 'DOC/2023/005',
            'main_pdf' => '1',
            'publication_category_id' => '35',
            'attachment' => '[{"layout":"documentattachmentlayout","key":"9ef0bFPR2yVb8BhQ","attributes":{"title_en":"Attachment One","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u0787\u07ac\u0786\u07ac\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"k0cNXMJiaGWea4ol","attributes":{"title_en":"Attachment Two","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078b\u07ad\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"eRV1uaZqDyaupo1n","attributes":{"title_en":"Attachment Three","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078c\u07a8\u0782\u07ac\u0787\u07b0","attachment":"1"}}]',
            'content_en' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec blandit leo, nec pretium dui. Nam tincidunt porta eros, ut euismod massa iaculis a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui odio, blandit eget hendrerit eleifend, volutpat id felis. Aenean elementum nisl eget tincidunt posuere. In fermentum venenatis nisi in fermentum. Fusce sagittis consequat ultricies. Quisque et metus vel urna dictum aliquet. Morbi tempor, orci aliquam molestie feugiat, ligula urna bibendum velit, cursus vehicula tellus lectus sit amet massa. Pellentesque rutrum placerat feugiat.&nbsp;</p>',
            'content_dh' => '<p>(މި ލިޔުމަކީ ލެޓިން އިން ޓްރާންސްލޭޓް ކޮއްފައިވާ ޑަމީ ޓެކްސްޓް ކޮޅެކެވެ) ފަހަރެއްގައި ބޯޅައަށް، ކާޓޫނަށް ނުވަތަ ތިމާވެއްޓާމެދުގެ ވިސްނުން މުހިންމުވެދާނެ، މާސް ވިހަވުން އިތުރުވެގެން ދިއުމަކީ އެކަށީގެންވާ ކަމެކެވެ. ފައުލް ކުރުމާ ހަމައަށް އަދި އޭގެ ކުރިންނެވެ. ފުޓްބޯޅައިގެ ކުރިން ފުޓްބޯޅަ ވަރަށް ގިނަ. އެކަމަކު ފުރާވަރުގެ ކުދިންނާއި އެއީ އެކަމަކު ޕްރޮޓީން. އެއީ އަބަދުވެސް އޮންނަ އެއްޗެކެވެ. ކްރާސް އެލިފެންޑް، އޮގް އެޓް އެލިފެންޑް ޕެލެންޓެސްކް.</p>'
        ]);
        \App\Models\Publication::create([
            'created_at' => '2022-07-19 21:42:06',
            'title_en' => 'WDC Spontaneous Meeting Minutes Six',
            'title_dh' => 'އަންހެނުންގެ ތަރައްގީއަށް މަސައްކަތްކުރާ ކޮމެޓީގެ ކުއްލި ޖަލްސާތަކުގެ ޔައުމިއްޔާ ހައެއް',
            'number' => 'DOC/2023/006',
            'main_pdf' => '1',
            'publication_category_id' => '35',
            'attachment' => '[{"layout":"documentattachmentlayout","key":"9ef0bFPR2yVb8BhQ","attributes":{"title_en":"Attachment One","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u0787\u07ac\u0786\u07ac\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"k0cNXMJiaGWea4ol","attributes":{"title_en":"Attachment Two","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078b\u07ad\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"eRV1uaZqDyaupo1n","attributes":{"title_en":"Attachment Three","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078c\u07a8\u0782\u07ac\u0787\u07b0","attachment":"1"}}]',
            'content_en' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec blandit leo, nec pretium dui. Nam tincidunt porta eros, ut euismod massa iaculis a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui odio, blandit eget hendrerit eleifend, volutpat id felis. Aenean elementum nisl eget tincidunt posuere. In fermentum venenatis nisi in fermentum. Fusce sagittis consequat ultricies. Quisque et metus vel urna dictum aliquet. Morbi tempor, orci aliquam molestie feugiat, ligula urna bibendum velit, cursus vehicula tellus lectus sit amet massa. Pellentesque rutrum placerat feugiat.&nbsp;</p>',
            'content_dh' => '<p>(މި ލިޔުމަކީ ލެޓިން އިން ޓްރާންސްލޭޓް ކޮއްފައިވާ ޑަމީ ޓެކްސްޓް ކޮޅެކެވެ) ފަހަރެއްގައި ބޯޅައަށް، ކާޓޫނަށް ނުވަތަ ތިމާވެއްޓާމެދުގެ ވިސްނުން މުހިންމުވެދާނެ، މާސް ވިހަވުން އިތުރުވެގެން ދިއުމަކީ އެކަށީގެންވާ ކަމެކެވެ. ފައުލް ކުރުމާ ހަމައަށް އަދި އޭގެ ކުރިންނެވެ. ފުޓްބޯޅައިގެ ކުރިން ފުޓްބޯޅަ ވަރަށް ގިނަ. އެކަމަކު ފުރާވަރުގެ ކުދިންނާއި އެއީ އެކަމަކު ޕްރޮޓީން. އެއީ އަބަދުވެސް އޮންނަ އެއްޗެކެވެ. ކްރާސް އެލިފެންޑް، އޮގް އެޓް އެލިފެންޑް ޕެލެންޓެސްކް.</p>'
        ]);
        \App\Models\Publication::create([
            'created_at' => '2022-07-19 21:42:07',
            'title_en' => 'WDC Spontaneous Meeting Minutes Seven',
            'title_dh' => 'އަންހެނުންގެ ތަރައްގީއަށް މަސައްކަތްކުރާ ކޮމެޓީގެ ކުއްލި ޖަލްސާތަކުގެ ޔައުމިއްޔާ ހަތެއް',
            'number' => 'DOC/2023/007',
            'main_pdf' => '1',
            'publication_category_id' => '35',
            'attachment' => '[{"layout":"documentattachmentlayout","key":"9ef0bFPR2yVb8BhQ","attributes":{"title_en":"Attachment One","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u0787\u07ac\u0786\u07ac\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"k0cNXMJiaGWea4ol","attributes":{"title_en":"Attachment Two","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078b\u07ad\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"eRV1uaZqDyaupo1n","attributes":{"title_en":"Attachment Three","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078c\u07a8\u0782\u07ac\u0787\u07b0","attachment":"1"}}]',
            'content_en' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec blandit leo, nec pretium dui. Nam tincidunt porta eros, ut euismod massa iaculis a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui odio, blandit eget hendrerit eleifend, volutpat id felis. Aenean elementum nisl eget tincidunt posuere. In fermentum venenatis nisi in fermentum. Fusce sagittis consequat ultricies. Quisque et metus vel urna dictum aliquet. Morbi tempor, orci aliquam molestie feugiat, ligula urna bibendum velit, cursus vehicula tellus lectus sit amet massa. Pellentesque rutrum placerat feugiat.&nbsp;</p>',
            'content_dh' => '<p>(މި ލިޔުމަކީ ލެޓިން އިން ޓްރާންސްލޭޓް ކޮއްފައިވާ ޑަމީ ޓެކްސްޓް ކޮޅެކެވެ) ފަހަރެއްގައި ބޯޅައަށް، ކާޓޫނަށް ނުވަތަ ތިމާވެއްޓާމެދުގެ ވިސްނުން މުހިންމުވެދާނެ، މާސް ވިހަވުން އިތުރުވެގެން ދިއުމަކީ އެކަށީގެންވާ ކަމެކެވެ. ފައުލް ކުރުމާ ހަމައަށް އަދި އޭގެ ކުރިންނެވެ. ފުޓްބޯޅައިގެ ކުރިން ފުޓްބޯޅަ ވަރަށް ގިނަ. އެކަމަކު ފުރާވަރުގެ ކުދިންނާއި އެއީ އެކަމަކު ޕްރޮޓީން. އެއީ އަބަދުވެސް އޮންނަ އެއްޗެކެވެ. ކްރާސް އެލިފެންޑް، އޮގް އެޓް އެލިފެންޑް ޕެލެންޓެސްކް.</p>'
        ]);
        \App\Models\Publication::create([
            'created_at' => '2022-07-19 21:42:08',
            'title_en' => 'WDC Spontaneous Meeting Minutes Eight',
            'title_dh' => 'އަންހެނުންގެ ތަރައްގީއަށް މަސައްކަތްކުރާ ކޮމެޓީގެ ކުއްލި ޖަލްސާތަކުގެ ޔައުމިއްޔާ އަށެއް',
            'number' => 'DOC/2023/008',
            'main_pdf' => '1',
            'publication_category_id' => '35',
            'attachment' => '[{"layout":"documentattachmentlayout","key":"9ef0bFPR2yVb8BhQ","attributes":{"title_en":"Attachment One","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u0787\u07ac\u0786\u07ac\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"k0cNXMJiaGWea4ol","attributes":{"title_en":"Attachment Two","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078b\u07ad\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"eRV1uaZqDyaupo1n","attributes":{"title_en":"Attachment Three","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078c\u07a8\u0782\u07ac\u0787\u07b0","attachment":"1"}}]',
            'content_en' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec blandit leo, nec pretium dui. Nam tincidunt porta eros, ut euismod massa iaculis a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui odio, blandit eget hendrerit eleifend, volutpat id felis. Aenean elementum nisl eget tincidunt posuere. In fermentum venenatis nisi in fermentum. Fusce sagittis consequat ultricies. Quisque et metus vel urna dictum aliquet. Morbi tempor, orci aliquam molestie feugiat, ligula urna bibendum velit, cursus vehicula tellus lectus sit amet massa. Pellentesque rutrum placerat feugiat.&nbsp;</p>',
            'content_dh' => '<p>(މި ލިޔުމަކީ ލެޓިން އިން ޓްރާންސްލޭޓް ކޮއްފައިވާ ޑަމީ ޓެކްސްޓް ކޮޅެކެވެ) ފަހަރެއްގައި ބޯޅައަށް، ކާޓޫނަށް ނުވަތަ ތިމާވެއްޓާމެދުގެ ވިސްނުން މުހިންމުވެދާނެ، މާސް ވިހަވުން އިތުރުވެގެން ދިއުމަކީ އެކަށީގެންވާ ކަމެކެވެ. ފައުލް ކުރުމާ ހަމައަށް އަދި އޭގެ ކުރިންނެވެ. ފުޓްބޯޅައިގެ ކުރިން ފުޓްބޯޅަ ވަރަށް ގިނަ. އެކަމަކު ފުރާވަރުގެ ކުދިންނާއި އެއީ އެކަމަކު ޕްރޮޓީން. އެއީ އަބަދުވެސް އޮންނަ އެއްޗެކެވެ. ކްރާސް އެލިފެންޑް، އޮގް އެޓް އެލިފެންޑް ޕެލެންޓެސްކް.</p>'
        ]);
        \App\Models\Publication::create([
            'created_at' => '2022-07-19 21:42:09',
            'title_en' => 'WDC Spontaneous Meeting Minutes Nine',
            'title_dh' => 'އަންހެނުންގެ ތަރައްގީއަށް މަސައްކަތްކުރާ ކޮމެޓީގެ ކުއްލި ޖަލްސާތަކުގެ ޔައުމިއްޔާ ނުވައެއް',
            'number' => 'DOC/2023/009',
            'main_pdf' => '1',
            'publication_category_id' => '35',
            'attachment' => '[{"layout":"documentattachmentlayout","key":"9ef0bFPR2yVb8BhQ","attributes":{"title_en":"Attachment One","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u0787\u07ac\u0786\u07ac\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"k0cNXMJiaGWea4ol","attributes":{"title_en":"Attachment Two","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078b\u07ad\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"eRV1uaZqDyaupo1n","attributes":{"title_en":"Attachment Three","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078c\u07a8\u0782\u07ac\u0787\u07b0","attachment":"1"}}]',
            'content_en' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec blandit leo, nec pretium dui. Nam tincidunt porta eros, ut euismod massa iaculis a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui odio, blandit eget hendrerit eleifend, volutpat id felis. Aenean elementum nisl eget tincidunt posuere. In fermentum venenatis nisi in fermentum. Fusce sagittis consequat ultricies. Quisque et metus vel urna dictum aliquet. Morbi tempor, orci aliquam molestie feugiat, ligula urna bibendum velit, cursus vehicula tellus lectus sit amet massa. Pellentesque rutrum placerat feugiat.&nbsp;</p>',
            'content_dh' => '<p>(މި ލިޔުމަކީ ލެޓިން އިން ޓްރާންސްލޭޓް ކޮއްފައިވާ ޑަމީ ޓެކްސްޓް ކޮޅެކެވެ) ފަހަރެއްގައި ބޯޅައަށް، ކާޓޫނަށް ނުވަތަ ތިމާވެއްޓާމެދުގެ ވިސްނުން މުހިންމުވެދާނެ، މާސް ވިހަވުން އިތުރުވެގެން ދިއުމަކީ އެކަށީގެންވާ ކަމެކެވެ. ފައުލް ކުރުމާ ހަމައަށް އަދި އޭގެ ކުރިންނެވެ. ފުޓްބޯޅައިގެ ކުރިން ފުޓްބޯޅަ ވަރަށް ގިނަ. އެކަމަކު ފުރާވަރުގެ ކުދިންނާއި އެއީ އެކަމަކު ޕްރޮޓީން. އެއީ އަބަދުވެސް އޮންނަ އެއްޗެކެވެ. ކްރާސް އެލިފެންޑް، އޮގް އެޓް އެލިފެންޑް ޕެލެންޓެސްކް.</p>'
        ]);
        \App\Models\Publication::create([
            'created_at' => '2022-07-19 21:42:10',
            'title_en' => 'WDC Spontaneous Meeting Minutes Ten',
            'title_dh' => 'އަންހެނުންގެ ތަރައްގީއަށް މަސައްކަތްކުރާ ކޮމެޓީގެ ކުއްލި ޖަލްސާތަކުގެ ޔައުމިއްޔާ ދިހައެއް',
            'number' => 'DOC/2023/010',
            'main_pdf' => '1',
            'publication_category_id' => '35',
            'attachment' => '[{"layout":"documentattachmentlayout","key":"9ef0bFPR2yVb8BhQ","attributes":{"title_en":"Attachment One","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u0787\u07ac\u0786\u07ac\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"k0cNXMJiaGWea4ol","attributes":{"title_en":"Attachment Two","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078b\u07ad\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"eRV1uaZqDyaupo1n","attributes":{"title_en":"Attachment Three","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078c\u07a8\u0782\u07ac\u0787\u07b0","attachment":"1"}}]',
            'content_en' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec blandit leo, nec pretium dui. Nam tincidunt porta eros, ut euismod massa iaculis a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui odio, blandit eget hendrerit eleifend, volutpat id felis. Aenean elementum nisl eget tincidunt posuere. In fermentum venenatis nisi in fermentum. Fusce sagittis consequat ultricies. Quisque et metus vel urna dictum aliquet. Morbi tempor, orci aliquam molestie feugiat, ligula urna bibendum velit, cursus vehicula tellus lectus sit amet massa. Pellentesque rutrum placerat feugiat.&nbsp;</p>',
            'content_dh' => '<p>(މި ލިޔުމަކީ ލެޓިން އިން ޓްރާންސްލޭޓް ކޮއްފައިވާ ޑަމީ ޓެކްސްޓް ކޮޅެކެވެ) ފަހަރެއްގައި ބޯޅައަށް، ކާޓޫނަށް ނުވަތަ ތިމާވެއްޓާމެދުގެ ވިސްނުން މުހިންމުވެދާނެ، މާސް ވިހަވުން އިތުރުވެގެން ދިއުމަކީ އެކަށީގެންވާ ކަމެކެވެ. ފައުލް ކުރުމާ ހަމައަށް އަދި އޭގެ ކުރިންނެވެ. ފުޓްބޯޅައިގެ ކުރިން ފުޓްބޯޅަ ވަރަށް ގިނަ. އެކަމަކު ފުރާވަރުގެ ކުދިންނާއި އެއީ އެކަމަކު ޕްރޮޓީން. އެއީ އަބަދުވެސް އޮންނަ އެއްޗެކެވެ. ކްރާސް އެލިފެންޑް، އޮގް އެޓް އެލިފެންޑް ޕެލެންޓެސްކް.</p>'
        ]);
        \App\Models\Publication::create([
            'created_at' => '2022-07-19 21:42:11',
            'title_en' => 'WDC Spontaneous Meeting Minutes Eleven',
            'title_dh' => 'އަންހެނުންގެ ތަރައްގީއަށް މަސައްކަތްކުރާ ކޮމެޓީގެ ކުއްލި ޖަލްސާތަކުގެ ޔައުމިއްޔާ އެގާރަ',
            'number' => 'DOC/2023/011',
            'main_pdf' => '1',
            'publication_category_id' => '35',
            'attachment' => '[{"layout":"documentattachmentlayout","key":"9ef0bFPR2yVb8BhQ","attributes":{"title_en":"Attachment One","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u0787\u07ac\u0786\u07ac\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"k0cNXMJiaGWea4ol","attributes":{"title_en":"Attachment Two","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078b\u07ad\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"eRV1uaZqDyaupo1n","attributes":{"title_en":"Attachment Three","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078c\u07a8\u0782\u07ac\u0787\u07b0","attachment":"1"}}]',
            'content_en' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec blandit leo, nec pretium dui. Nam tincidunt porta eros, ut euismod massa iaculis a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui odio, blandit eget hendrerit eleifend, volutpat id felis. Aenean elementum nisl eget tincidunt posuere. In fermentum venenatis nisi in fermentum. Fusce sagittis consequat ultricies. Quisque et metus vel urna dictum aliquet. Morbi tempor, orci aliquam molestie feugiat, ligula urna bibendum velit, cursus vehicula tellus lectus sit amet massa. Pellentesque rutrum placerat feugiat.&nbsp;</p>',
            'content_dh' => '<p>(މި ލިޔުމަކީ ލެޓިން އިން ޓްރާންސްލޭޓް ކޮއްފައިވާ ޑަމީ ޓެކްސްޓް ކޮޅެކެވެ) ފަހަރެއްގައި ބޯޅައަށް، ކާޓޫނަށް ނުވަތަ ތިމާވެއްޓާމެދުގެ ވިސްނުން މުހިންމުވެދާނެ، މާސް ވިހަވުން އިތުރުވެގެން ދިއުމަކީ އެކަށީގެންވާ ކަމެކެވެ. ފައުލް ކުރުމާ ހަމައަށް އަދި އޭގެ ކުރިންނެވެ. ފުޓްބޯޅައިގެ ކުރިން ފުޓްބޯޅަ ވަރަށް ގިނަ. އެކަމަކު ފުރާވަރުގެ ކުދިންނާއި އެއީ އެކަމަކު ޕްރޮޓީން. އެއީ އަބަދުވެސް އޮންނަ އެއްޗެކެވެ. ކްރާސް އެލިފެންޑް، އޮގް އެޓް އެލިފެންޑް ޕެލެންޓެސްކް.</p>'
        ]);
        \App\Models\Publication::create([
            'created_at' => '2022-07-19 21:42:12',
            'title_en' => 'WDC Spontaneous Meeting Minutes Twelve',
            'title_dh' => 'އަންހެނުންގެ ތަރައްގީއަށް މަސައްކަތްކުރާ ކޮމެޓީގެ ކުއްލި ޖަލްސާތަކުގެ ޔައުމިއްޔާ ބާރަ',
            'number' => 'DOC/2023/012',
            'main_pdf' => '1',
            'publication_category_id' => '35',
            'attachment' => '[{"layout":"documentattachmentlayout","key":"9ef0bFPR2yVb8BhQ","attributes":{"title_en":"Attachment One","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u0787\u07ac\u0786\u07ac\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"k0cNXMJiaGWea4ol","attributes":{"title_en":"Attachment Two","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078b\u07ad\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"eRV1uaZqDyaupo1n","attributes":{"title_en":"Attachment Three","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078c\u07a8\u0782\u07ac\u0787\u07b0","attachment":"1"}}]',
            'content_en' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec blandit leo, nec pretium dui. Nam tincidunt porta eros, ut euismod massa iaculis a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui odio, blandit eget hendrerit eleifend, volutpat id felis. Aenean elementum nisl eget tincidunt posuere. In fermentum venenatis nisi in fermentum. Fusce sagittis consequat ultricies. Quisque et metus vel urna dictum aliquet. Morbi tempor, orci aliquam molestie feugiat, ligula urna bibendum velit, cursus vehicula tellus lectus sit amet massa. Pellentesque rutrum placerat feugiat.&nbsp;</p>',
            'content_dh' => '<p>(މި ލިޔުމަކީ ލެޓިން އިން ޓްރާންސްލޭޓް ކޮއްފައިވާ ޑަމީ ޓެކްސްޓް ކޮޅެކެވެ) ފަހަރެއްގައި ބޯޅައަށް، ކާޓޫނަށް ނުވަތަ ތިމާވެއްޓާމެދުގެ ވިސްނުން މުހިންމުވެދާނެ، މާސް ވިހަވުން އިތުރުވެގެން ދިއުމަކީ އެކަށީގެންވާ ކަމެކެވެ. ފައުލް ކުރުމާ ހަމައަށް އަދި އޭގެ ކުރިންނެވެ. ފުޓްބޯޅައިގެ ކުރިން ފުޓްބޯޅަ ވަރަށް ގިނަ. އެކަމަކު ފުރާވަރުގެ ކުދިންނާއި އެއީ އެކަމަކު ޕްރޮޓީން. އެއީ އަބަދުވެސް އޮންނަ އެއްޗެކެވެ. ކްރާސް އެލިފެންޑް، އޮގް އެޓް އެލިފެންޑް ޕެލެންޓެސްކް.</p>'
        ]);
        \App\Models\Publication::create([
            'created_at' => '2022-07-19 21:42:13',
            'title_en' => 'WDC Spontaneous Meeting Minutes Thirteen',
            'title_dh' => 'އަންހެނުންގެ ތަރައްގީއަށް މަސައްކަތްކުރާ ކޮމެޓީގެ ކުއްލި ޖަލްސާތަކުގެ ޔައުމިއްޔާ ތޭރަ',
            'number' => 'DOC/2023/013',
            'main_pdf' => '1',
            'publication_category_id' => '35',
            'attachment' => '[{"layout":"documentattachmentlayout","key":"9ef0bFPR2yVb8BhQ","attributes":{"title_en":"Attachment One","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u0787\u07ac\u0786\u07ac\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"k0cNXMJiaGWea4ol","attributes":{"title_en":"Attachment Two","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078b\u07ad\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"eRV1uaZqDyaupo1n","attributes":{"title_en":"Attachment Three","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078c\u07a8\u0782\u07ac\u0787\u07b0","attachment":"1"}}]',
            'content_en' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec blandit leo, nec pretium dui. Nam tincidunt porta eros, ut euismod massa iaculis a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui odio, blandit eget hendrerit eleifend, volutpat id felis. Aenean elementum nisl eget tincidunt posuere. In fermentum venenatis nisi in fermentum. Fusce sagittis consequat ultricies. Quisque et metus vel urna dictum aliquet. Morbi tempor, orci aliquam molestie feugiat, ligula urna bibendum velit, cursus vehicula tellus lectus sit amet massa. Pellentesque rutrum placerat feugiat.&nbsp;</p>',
            'content_dh' => '<p>(މި ލިޔުމަކީ ލެޓިން އިން ޓްރާންސްލޭޓް ކޮއްފައިވާ ޑަމީ ޓެކްސްޓް ކޮޅެކެވެ) ފަހަރެއްގައި ބޯޅައަށް، ކާޓޫނަށް ނުވަތަ ތިމާވެއްޓާމެދުގެ ވިސްނުން މުހިންމުވެދާނެ، މާސް ވިހަވުން އިތުރުވެގެން ދިއުމަކީ އެކަށީގެންވާ ކަމެކެވެ. ފައުލް ކުރުމާ ހަމައަށް އަދި އޭގެ ކުރިންނެވެ. ފުޓްބޯޅައިގެ ކުރިން ފުޓްބޯޅަ ވަރަށް ގިނަ. އެކަމަކު ފުރާވަރުގެ ކުދިންނާއި އެއީ އެކަމަކު ޕްރޮޓީން. އެއީ އަބަދުވެސް އޮންނަ އެއްޗެކެވެ. ކްރާސް އެލިފެންޑް، އޮގް އެޓް އެލިފެންޑް ޕެލެންޓެސްކް.</p>'
        ]);
        \App\Models\Publication::create([
            'created_at' => '2022-07-19 21:42:14',
            'title_en' => 'WDC Spontaneous Meeting Minutes Fourteen',
            'title_dh' => 'އަންހެނުންގެ ތަރައްގީއަށް މަސައްކަތްކުރާ ކޮމެޓީގެ ކުއްލި ޖަލްސާތަކުގެ ޔައުމިއްޔާ ސާދަ',
            'number' => 'DOC/2023/014',
            'main_pdf' => '1',
            'publication_category_id' => '35',
            'attachment' => '[{"layout":"documentattachmentlayout","key":"9ef0bFPR2yVb8BhQ","attributes":{"title_en":"Attachment One","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u0787\u07ac\u0786\u07ac\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"k0cNXMJiaGWea4ol","attributes":{"title_en":"Attachment Two","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078b\u07ad\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"eRV1uaZqDyaupo1n","attributes":{"title_en":"Attachment Three","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078c\u07a8\u0782\u07ac\u0787\u07b0","attachment":"1"}}]',
            'content_en' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec blandit leo, nec pretium dui. Nam tincidunt porta eros, ut euismod massa iaculis a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui odio, blandit eget hendrerit eleifend, volutpat id felis. Aenean elementum nisl eget tincidunt posuere. In fermentum venenatis nisi in fermentum. Fusce sagittis consequat ultricies. Quisque et metus vel urna dictum aliquet. Morbi tempor, orci aliquam molestie feugiat, ligula urna bibendum velit, cursus vehicula tellus lectus sit amet massa. Pellentesque rutrum placerat feugiat.&nbsp;</p>',
            'content_dh' => '<p>(މި ލިޔުމަކީ ލެޓިން އިން ޓްރާންސްލޭޓް ކޮއްފައިވާ ޑަމީ ޓެކްސްޓް ކޮޅެކެވެ) ފަހަރެއްގައި ބޯޅައަށް، ކާޓޫނަށް ނުވަތަ ތިމާވެއްޓާމެދުގެ ވިސްނުން މުހިންމުވެދާނެ، މާސް ވިހަވުން އިތުރުވެގެން ދިއުމަކީ އެކަށީގެންވާ ކަމެކެވެ. ފައުލް ކުރުމާ ހަމައަށް އަދި އޭގެ ކުރިންނެވެ. ފުޓްބޯޅައިގެ ކުރިން ފުޓްބޯޅަ ވަރަށް ގިނަ. އެކަމަކު ފުރާވަރުގެ ކުދިންނާއި އެއީ އެކަމަކު ޕްރޮޓީން. އެއީ އަބަދުވެސް އޮންނަ އެއްޗެކެވެ. ކްރާސް އެލިފެންޑް، އޮގް އެޓް އެލިފެންޑް ޕެލެންޓެސްކް.</p>'
        ]);
        \App\Models\Publication::create([
            'created_at' => '2022-07-19 21:42:15',
            'title_en' => 'WDC Spontaneous Meeting Minutes Fifteen',
            'title_dh' => 'އަންހެނުންގެ ތަރައްގީއަށް މަސައްކަތްކުރާ ކޮމެޓީގެ ކުއްލި ޖަލްސާތަކުގެ ޔައުމިއްޔާ ފަނަރަ',
            'number' => 'DOC/2023/015',
            'main_pdf' => '1',
            'publication_category_id' => '35',
            'attachment' => '[{"layout":"documentattachmentlayout","key":"9ef0bFPR2yVb8BhQ","attributes":{"title_en":"Attachment One","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u0787\u07ac\u0786\u07ac\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"k0cNXMJiaGWea4ol","attributes":{"title_en":"Attachment Two","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078b\u07ad\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"eRV1uaZqDyaupo1n","attributes":{"title_en":"Attachment Three","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078c\u07a8\u0782\u07ac\u0787\u07b0","attachment":"1"}}]',
            'content_en' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec blandit leo, nec pretium dui. Nam tincidunt porta eros, ut euismod massa iaculis a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui odio, blandit eget hendrerit eleifend, volutpat id felis. Aenean elementum nisl eget tincidunt posuere. In fermentum venenatis nisi in fermentum. Fusce sagittis consequat ultricies. Quisque et metus vel urna dictum aliquet. Morbi tempor, orci aliquam molestie feugiat, ligula urna bibendum velit, cursus vehicula tellus lectus sit amet massa. Pellentesque rutrum placerat feugiat.&nbsp;</p>',
            'content_dh' => '<p>(މި ލިޔުމަކީ ލެޓިން އިން ޓްރާންސްލޭޓް ކޮއްފައިވާ ޑަމީ ޓެކްސްޓް ކޮޅެކެވެ) ފަހަރެއްގައި ބޯޅައަށް، ކާޓޫނަށް ނުވަތަ ތިމާވެއްޓާމެދުގެ ވިސްނުން މުހިންމުވެދާނެ، މާސް ވިހަވުން އިތުރުވެގެން ދިއުމަކީ އެކަށީގެންވާ ކަމެކެވެ. ފައުލް ކުރުމާ ހަމައަށް އަދި އޭގެ ކުރިންނެވެ. ފުޓްބޯޅައިގެ ކުރިން ފުޓްބޯޅަ ވަރަށް ގިނަ. އެކަމަކު ފުރާވަރުގެ ކުދިންނާއި އެއީ އެކަމަކު ޕްރޮޓީން. އެއީ އަބަދުވެސް އޮންނަ އެއްޗެކެވެ. ކްރާސް އެލިފެންޑް، އޮގް އެޓް އެލިފެންޑް ޕެލެންޓެސްކް.</p>'
        ]);
        \App\Models\Publication::create([
            'created_at' => '2022-07-19 21:42:16',
            'title_en' => 'WDC Spontaneous Meeting Minutes Sixteen',
            'title_dh' => 'އަންހެނުންގެ ތަރައްގީއަށް މަސައްކަތްކުރާ ކޮމެޓީގެ ކުއްލި ޖަލްސާތަކުގެ ޔައުމިއްޔާ ސޯޅަ',
            'number' => 'DOC/2023/016',
            'main_pdf' => '1',
            'publication_category_id' => '35',
            'attachment' => '[{"layout":"documentattachmentlayout","key":"9ef0bFPR2yVb8BhQ","attributes":{"title_en":"Attachment One","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u0787\u07ac\u0786\u07ac\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"k0cNXMJiaGWea4ol","attributes":{"title_en":"Attachment Two","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078b\u07ad\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"eRV1uaZqDyaupo1n","attributes":{"title_en":"Attachment Three","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078c\u07a8\u0782\u07ac\u0787\u07b0","attachment":"1"}}]',
            'content_en' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec blandit leo, nec pretium dui. Nam tincidunt porta eros, ut euismod massa iaculis a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui odio, blandit eget hendrerit eleifend, volutpat id felis. Aenean elementum nisl eget tincidunt posuere. In fermentum venenatis nisi in fermentum. Fusce sagittis consequat ultricies. Quisque et metus vel urna dictum aliquet. Morbi tempor, orci aliquam molestie feugiat, ligula urna bibendum velit, cursus vehicula tellus lectus sit amet massa. Pellentesque rutrum placerat feugiat.&nbsp;</p>',
            'content_dh' => '<p>(މި ލިޔުމަކީ ލެޓިން އިން ޓްރާންސްލޭޓް ކޮއްފައިވާ ޑަމީ ޓެކްސްޓް ކޮޅެކެވެ) ފަހަރެއްގައި ބޯޅައަށް، ކާޓޫނަށް ނުވަތަ ތިމާވެއްޓާމެދުގެ ވިސްނުން މުހިންމުވެދާނެ، މާސް ވިހަވުން އިތުރުވެގެން ދިއުމަކީ އެކަށީގެންވާ ކަމެކެވެ. ފައުލް ކުރުމާ ހަމައަށް އަދި އޭގެ ކުރިންނެވެ. ފުޓްބޯޅައިގެ ކުރިން ފުޓްބޯޅަ ވަރަށް ގިނަ. އެކަމަކު ފުރާވަރުގެ ކުދިންނާއި އެއީ އެކަމަކު ޕްރޮޓީން. އެއީ އަބަދުވެސް އޮންނަ އެއްޗެކެވެ. ކްރާސް އެލިފެންޑް، އޮގް އެޓް އެލިފެންޑް ޕެލެންޓެސްކް.</p>'
        ]);
        \App\Models\Publication::create([
            'created_at' => '2022-07-19 21:42:17',
            'title_en' => 'WDC Spontaneous Meeting Minutes Seventeen',
            'title_dh' => 'އަންހެނުންގެ ތަރައްގީއަށް މަސައްކަތްކުރާ ކޮމެޓީގެ ކުއްލި ޖަލްސާތަކުގެ ޔައުމިއްޔާ ސަތާރަ',
            'number' => 'DOC/2023/017',
            'main_pdf' => '1',
            'publication_category_id' => '35',
            'attachment' => '[{"layout":"documentattachmentlayout","key":"9ef0bFPR2yVb8BhQ","attributes":{"title_en":"Attachment One","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u0787\u07ac\u0786\u07ac\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"k0cNXMJiaGWea4ol","attributes":{"title_en":"Attachment Two","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078b\u07ad\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"eRV1uaZqDyaupo1n","attributes":{"title_en":"Attachment Three","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078c\u07a8\u0782\u07ac\u0787\u07b0","attachment":"1"}}]',
            'content_en' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec blandit leo, nec pretium dui. Nam tincidunt porta eros, ut euismod massa iaculis a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui odio, blandit eget hendrerit eleifend, volutpat id felis. Aenean elementum nisl eget tincidunt posuere. In fermentum venenatis nisi in fermentum. Fusce sagittis consequat ultricies. Quisque et metus vel urna dictum aliquet. Morbi tempor, orci aliquam molestie feugiat, ligula urna bibendum velit, cursus vehicula tellus lectus sit amet massa. Pellentesque rutrum placerat feugiat.&nbsp;</p>',
            'content_dh' => '<p>(މި ލިޔުމަކީ ލެޓިން އިން ޓްރާންސްލޭޓް ކޮއްފައިވާ ޑަމީ ޓެކްސްޓް ކޮޅެކެވެ) ފަހަރެއްގައި ބޯޅައަށް، ކާޓޫނަށް ނުވަތަ ތިމާވެއްޓާމެދުގެ ވިސްނުން މުހިންމުވެދާނެ، މާސް ވިހަވުން އިތުރުވެގެން ދިއުމަކީ އެކަށީގެންވާ ކަމެކެވެ. ފައުލް ކުރުމާ ހަމައަށް އަދި އޭގެ ކުރިންނެވެ. ފުޓްބޯޅައިގެ ކުރިން ފުޓްބޯޅަ ވަރަށް ގިނަ. އެކަމަކު ފުރާވަރުގެ ކުދިންނާއި އެއީ އެކަމަކު ޕްރޮޓީން. އެއީ އަބަދުވެސް އޮންނަ އެއްޗެކެވެ. ކްރާސް އެލިފެންޑް، އޮގް އެޓް އެލިފެންޑް ޕެލެންޓެސްކް.</p>'
        ]);
        \App\Models\Publication::create([
            'created_at' => '2022-07-19 21:42:18',
            'title_en' => 'WDC Spontaneous Meeting Minutes Eighteen',
            'title_dh' => 'އަންހެނުންގެ ތަރައްގީއަށް މަސައްކަތްކުރާ ކޮމެޓީގެ ކުއްލި ޖަލްސާތަކުގެ ޔައުމިއްޔާ އަށާރަ',
            'number' => 'DOC/2023/018',
            'main_pdf' => '1',
            'publication_category_id' => '35',
            'attachment' => '[{"layout":"documentattachmentlayout","key":"9ef0bFPR2yVb8BhQ","attributes":{"title_en":"Attachment One","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u0787\u07ac\u0786\u07ac\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"k0cNXMJiaGWea4ol","attributes":{"title_en":"Attachment Two","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078b\u07ad\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"eRV1uaZqDyaupo1n","attributes":{"title_en":"Attachment Three","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078c\u07a8\u0782\u07ac\u0787\u07b0","attachment":"1"}}]',
            'content_en' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec blandit leo, nec pretium dui. Nam tincidunt porta eros, ut euismod massa iaculis a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui odio, blandit eget hendrerit eleifend, volutpat id felis. Aenean elementum nisl eget tincidunt posuere. In fermentum venenatis nisi in fermentum. Fusce sagittis consequat ultricies. Quisque et metus vel urna dictum aliquet. Morbi tempor, orci aliquam molestie feugiat, ligula urna bibendum velit, cursus vehicula tellus lectus sit amet massa. Pellentesque rutrum placerat feugiat.&nbsp;</p>',
            'content_dh' => '<p>(މި ލިޔުމަކީ ލެޓިން އިން ޓްރާންސްލޭޓް ކޮއްފައިވާ ޑަމީ ޓެކްސްޓް ކޮޅެކެވެ) ފަހަރެއްގައި ބޯޅައަށް، ކާޓޫނަށް ނުވަތަ ތިމާވެއްޓާމެދުގެ ވިސްނުން މުހިންމުވެދާނެ، މާސް ވިހަވުން އިތުރުވެގެން ދިއުމަކީ އެކަށީގެންވާ ކަމެކެވެ. ފައުލް ކުރުމާ ހަމައަށް އަދި އޭގެ ކުރިންނެވެ. ފުޓްބޯޅައިގެ ކުރިން ފުޓްބޯޅަ ވަރަށް ގިނަ. އެކަމަކު ފުރާވަރުގެ ކުދިންނާއި އެއީ އެކަމަކު ޕްރޮޓީން. އެއީ އަބަދުވެސް އޮންނަ އެއްޗެކެވެ. ކްރާސް އެލިފެންޑް، އޮގް އެޓް އެލިފެންޑް ޕެލެންޓެސްކް.</p>'
        ]);
        \App\Models\Publication::create([
            'created_at' => '2022-07-19 21:42:19',
            'title_en' => 'WDC Spontaneous Meeting Minutes Nineteen',
            'title_dh' => 'އަންހެނުންގެ ތަރައްގީއަށް މަސައްކަތްކުރާ ކޮމެޓީގެ ކުއްލި ޖަލްސާތަކުގެ ޔައުމިއްޔާ ނަވާރަ',
            'number' => 'DOC/2023/019',
            'main_pdf' => '1',
            'publication_category_id' => '35',
            'attachment' => '[{"layout":"documentattachmentlayout","key":"9ef0bFPR2yVb8BhQ","attributes":{"title_en":"Attachment One","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u0787\u07ac\u0786\u07ac\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"k0cNXMJiaGWea4ol","attributes":{"title_en":"Attachment Two","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078b\u07ad\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"eRV1uaZqDyaupo1n","attributes":{"title_en":"Attachment Three","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078c\u07a8\u0782\u07ac\u0787\u07b0","attachment":"1"}}]',
            'content_en' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec blandit leo, nec pretium dui. Nam tincidunt porta eros, ut euismod massa iaculis a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui odio, blandit eget hendrerit eleifend, volutpat id felis. Aenean elementum nisl eget tincidunt posuere. In fermentum venenatis nisi in fermentum. Fusce sagittis consequat ultricies. Quisque et metus vel urna dictum aliquet. Morbi tempor, orci aliquam molestie feugiat, ligula urna bibendum velit, cursus vehicula tellus lectus sit amet massa. Pellentesque rutrum placerat feugiat.&nbsp;</p>',
            'content_dh' => '<p>(މި ލިޔުމަކީ ލެޓިން އިން ޓްރާންސްލޭޓް ކޮއްފައިވާ ޑަމީ ޓެކްސްޓް ކޮޅެކެވެ) ފަހަރެއްގައި ބޯޅައަށް، ކާޓޫނަށް ނުވަތަ ތިމާވެއްޓާމެދުގެ ވިސްނުން މުހިންމުވެދާނެ، މާސް ވިހަވުން އިތުރުވެގެން ދިއުމަކީ އެކަށީގެންވާ ކަމެކެވެ. ފައުލް ކުރުމާ ހަމައަށް އަދި އޭގެ ކުރިންނެވެ. ފުޓްބޯޅައިގެ ކުރިން ފުޓްބޯޅަ ވަރަށް ގިނަ. އެކަމަކު ފުރާވަރުގެ ކުދިންނާއި އެއީ އެކަމަކު ޕްރޮޓީން. އެއީ އަބަދުވެސް އޮންނަ އެއްޗެކެވެ. ކްރާސް އެލިފެންޑް، އޮގް އެޓް އެލިފެންޑް ޕެލެންޓެސްކް.</p>'
        ]);
        \App\Models\Publication::create([
            'created_at' => '2022-07-19 21:42:20',
            'title_en' => 'WDC Spontaneous Meeting Minutes Twenty',
            'title_dh' => 'އަންހެނުންގެ ތަރައްގީއަށް މަސައްކަތްކުރާ ކޮމެޓީގެ ކުއްލި ޖަލްސާތަކުގެ ޔައުމިއްޔާ ވިހި',
            'number' => 'DOC/2023/020',
            'main_pdf' => '1',
            'publication_category_id' => '35',
            'attachment' => '[{"layout":"documentattachmentlayout","key":"9ef0bFPR2yVb8BhQ","attributes":{"title_en":"Attachment One","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u0787\u07ac\u0786\u07ac\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"k0cNXMJiaGWea4ol","attributes":{"title_en":"Attachment Two","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078b\u07ad\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"eRV1uaZqDyaupo1n","attributes":{"title_en":"Attachment Three","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078c\u07a8\u0782\u07ac\u0787\u07b0","attachment":"1"}}]',
            'content_en' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec blandit leo, nec pretium dui. Nam tincidunt porta eros, ut euismod massa iaculis a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui odio, blandit eget hendrerit eleifend, volutpat id felis. Aenean elementum nisl eget tincidunt posuere. In fermentum venenatis nisi in fermentum. Fusce sagittis consequat ultricies. Quisque et metus vel urna dictum aliquet. Morbi tempor, orci aliquam molestie feugiat, ligula urna bibendum velit, cursus vehicula tellus lectus sit amet massa. Pellentesque rutrum placerat feugiat.&nbsp;</p>',
            'content_dh' => '<p>(މި ލިޔުމަކީ ލެޓިން އިން ޓްރާންސްލޭޓް ކޮއްފައިވާ ޑަމީ ޓެކްސްޓް ކޮޅެކެވެ) ފަހަރެއްގައި ބޯޅައަށް، ކާޓޫނަށް ނުވަތަ ތިމާވެއްޓާމެދުގެ ވިސްނުން މުހިންމުވެދާނެ، މާސް ވިހަވުން އިތުރުވެގެން ދިއުމަކީ އެކަށީގެންވާ ކަމެކެވެ. ފައުލް ކުރުމާ ހަމައަށް އަދި އޭގެ ކުރިންނެވެ. ފުޓްބޯޅައިގެ ކުރިން ފުޓްބޯޅަ ވަރަށް ގިނަ. އެކަމަކު ފުރާވަރުގެ ކުދިންނާއި އެއީ އެކަމަކު ޕްރޮޓީން. އެއީ އަބަދުވެސް އޮންނަ އެއްޗެކެވެ. ކްރާސް އެލިފެންޑް، އޮގް އެޓް އެލިފެންޑް ޕެލެންޓެސްކް.</p>'
        ]);
        
    }
}
