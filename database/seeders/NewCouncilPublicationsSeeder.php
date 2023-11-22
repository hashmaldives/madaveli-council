<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CouncilPublicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Publication::create([
            'id' => '1',
            'created_at' => '2022-07-19 20:41:01',
            'title_en' => 'Item One',
            'title_dh' => 'އައިޓަމް އެކެއް',
            'number' => 'DOC/2023/001',
            'main_pdf' => '1',
            'publication_category_id' => '1',
            'attachment' => '[{"layout":"documentattachmentlayout","key":"9ef0bFPR2yVb8BhQ","attributes":{"title_en":"Attachment One","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u0787\u07ac\u0786\u07ac\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"k0cNXMJiaGWea4ol","attributes":{"title_en":"Attachment Two","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078b\u07ad\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"eRV1uaZqDyaupo1n","attributes":{"title_en":"Attachment Three","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078c\u07a8\u0782\u07ac\u0787\u07b0","attachment":"1"}}]',
            'content_en' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec blandit leo, nec pretium dui. Nam tincidunt porta eros, ut euismod massa iaculis a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui odio, blandit eget hendrerit eleifend, volutpat id felis. Aenean elementum nisl eget tincidunt posuere. In fermentum venenatis nisi in fermentum. Fusce sagittis consequat ultricies. Quisque et metus vel urna dictum aliquet. Morbi tempor, orci aliquam molestie feugiat, ligula urna bibendum velit, cursus vehicula tellus lectus sit amet massa. Pellentesque rutrum placerat feugiat.&nbsp;</p>',
            'content_dh' => '<p>(މި ލިޔުމަކީ ލެޓިން އިން ޓްރާންސްލޭޓް ކޮއްފައިވާ ޑަމީ ޓެކްސްޓް ކޮޅެކެވެ) ފަހަރެއްގައި ބޯޅައަށް، ކާޓޫނަށް ނުވަތަ ތިމާވެއްޓާމެދުގެ ވިސްނުން މުހިންމުވެދާނެ، މާސް ވިހަވުން އިތުރުވެގެން ދިއުމަކީ އެކަށީގެންވާ ކަމެކެވެ. ފައުލް ކުރުމާ ހަމައަށް އަދި އޭގެ ކުރިންނެވެ. ފުޓްބޯޅައިގެ ކުރިން ފުޓްބޯޅަ ވަރަށް ގިނަ. އެކަމަކު ފުރާވަރުގެ ކުދިންނާއި އެއީ އެކަމަކު ޕްރޮޓީން. އެއީ އަބަދުވެސް އޮންނަ އެއްޗެކެވެ. ކްރާސް އެލިފެންޑް، އޮގް އެޓް އެލިފެންޑް ޕެލެންޓެސްކް.</p>'
        ]);
        \App\Models\Publication::create([
            'id' => '2',
            'created_at' => '2022-07-19 20:41:02',
            'title_en' => 'Item Two',
            'title_dh' => 'އައިޓަމް ދޭއް',
            'number' => 'DOC/2023/002',
            'main_pdf' => '1',
            'attachment' => '[{"layout":"documentattachmentlayout","key":"9ef0bFPR2yVb8BhQ","attributes":{"title_en":"Attachment One","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u0787\u07ac\u0786\u07ac\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"k0cNXMJiaGWea4ol","attributes":{"title_en":"Attachment Two","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078b\u07ad\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"eRV1uaZqDyaupo1n","attributes":{"title_en":"Attachment Three","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078c\u07a8\u0782\u07ac\u0787\u07b0","attachment":"1"}}]',
            'content_en' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec blandit leo, nec pretium dui. Nam tincidunt porta eros, ut euismod massa iaculis a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui odio, blandit eget hendrerit eleifend, volutpat id felis. Aenean elementum nisl eget tincidunt posuere. In fermentum venenatis nisi in fermentum. Fusce sagittis consequat ultricies. Quisque et metus vel urna dictum aliquet. Morbi tempor, orci aliquam molestie feugiat, ligula urna bibendum velit, cursus vehicula tellus lectus sit amet massa. Pellentesque rutrum placerat feugiat.&nbsp;</p>',
            'content_dh' => '<p>(މި ލިޔުމަކީ ލެޓިން އިން ޓްރާންސްލޭޓް ކޮއްފައިވާ ޑަމީ ޓެކްސްޓް ކޮޅެކެވެ) ފަހަރެއްގައި ބޯޅައަށް، ކާޓޫނަށް ނުވަތަ ތިމާވެއްޓާމެދުގެ ވިސްނުން މުހިންމުވެދާނެ، މާސް ވިހަވުން އިތުރުވެގެން ދިއުމަކީ އެކަށީގެންވާ ކަމެކެވެ. ފައުލް ކުރުމާ ހަމައަށް އަދި އޭގެ ކުރިންނެވެ. ފުޓްބޯޅައިގެ ކުރިން ފުޓްބޯޅަ ވަރަށް ގިނަ. އެކަމަކު ފުރާވަރުގެ ކުދިންނާއި އެއީ އެކަމަކު ޕްރޮޓީން. އެއީ އަބަދުވެސް އޮންނަ އެއްޗެކެވެ. ކްރާސް އެލިފެންޑް، އޮގް އެޓް އެލިފެންޑް ޕެލެންޓެސްކް.</p>'
        ]);
        \App\Models\Publication::create([
            'id' => '3',
            'created_at' => '2022-07-19 20:41:03',
            'title_en' => 'Item Three',
            'title_dh' => 'އައިޓަމް ތިނެއް',
            'number' => 'DOC/2023/003',
            'main_pdf' => '1',
            'attachment' => '[{"layout":"documentattachmentlayout","key":"9ef0bFPR2yVb8BhQ","attributes":{"title_en":"Attachment One","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u0787\u07ac\u0786\u07ac\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"k0cNXMJiaGWea4ol","attributes":{"title_en":"Attachment Two","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078b\u07ad\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"eRV1uaZqDyaupo1n","attributes":{"title_en":"Attachment Three","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078c\u07a8\u0782\u07ac\u0787\u07b0","attachment":"1"}}]',
            'content_en' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec blandit leo, nec pretium dui. Nam tincidunt porta eros, ut euismod massa iaculis a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui odio, blandit eget hendrerit eleifend, volutpat id felis. Aenean elementum nisl eget tincidunt posuere. In fermentum venenatis nisi in fermentum. Fusce sagittis consequat ultricies. Quisque et metus vel urna dictum aliquet. Morbi tempor, orci aliquam molestie feugiat, ligula urna bibendum velit, cursus vehicula tellus lectus sit amet massa. Pellentesque rutrum placerat feugiat.&nbsp;</p>',
            'content_dh' => '<p>(މި ލިޔުމަކީ ލެޓިން އިން ޓްރާންސްލޭޓް ކޮއްފައިވާ ޑަމީ ޓެކްސްޓް ކޮޅެކެވެ) ފަހަރެއްގައި ބޯޅައަށް، ކާޓޫނަށް ނުވަތަ ތިމާވެއްޓާމެދުގެ ވިސްނުން މުހިންމުވެދާނެ، މާސް ވިހަވުން އިތުރުވެގެން ދިއުމަކީ އެކަށީގެންވާ ކަމެކެވެ. ފައުލް ކުރުމާ ހަމައަށް އަދި އޭގެ ކުރިންނެވެ. ފުޓްބޯޅައިގެ ކުރިން ފުޓްބޯޅަ ވަރަށް ގިނަ. އެކަމަކު ފުރާވަރުގެ ކުދިންނާއި އެއީ އެކަމަކު ޕްރޮޓީން. އެއީ އަބަދުވެސް އޮންނަ އެއްޗެކެވެ. ކްރާސް އެލިފެންޑް، އޮގް އެޓް އެލިފެންޑް ޕެލެންޓެސްކް.</p>'
        ]);
        \App\Models\Publication::create([
            'id' => '4',
            'created_at' => '2022-07-19 20:41:04',
            'title_en' => 'Item Four',
            'title_dh' => 'އައިޓަމް ހަތަރެއް',
            'number' => 'DOC/2023/004',
            'main_pdf' => '1',
            'attachment' => '[{"layout":"documentattachmentlayout","key":"9ef0bFPR2yVb8BhQ","attributes":{"title_en":"Attachment One","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u0787\u07ac\u0786\u07ac\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"k0cNXMJiaGWea4ol","attributes":{"title_en":"Attachment Two","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078b\u07ad\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"eRV1uaZqDyaupo1n","attributes":{"title_en":"Attachment Three","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078c\u07a8\u0782\u07ac\u0787\u07b0","attachment":"1"}}]',
            'content_en' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec blandit leo, nec pretium dui. Nam tincidunt porta eros, ut euismod massa iaculis a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui odio, blandit eget hendrerit eleifend, volutpat id felis. Aenean elementum nisl eget tincidunt posuere. In fermentum venenatis nisi in fermentum. Fusce sagittis consequat ultricies. Quisque et metus vel urna dictum aliquet. Morbi tempor, orci aliquam molestie feugiat, ligula urna bibendum velit, cursus vehicula tellus lectus sit amet massa. Pellentesque rutrum placerat feugiat.&nbsp;</p>',
            'content_dh' => '<p>(މި ލިޔުމަކީ ލެޓިން އިން ޓްރާންސްލޭޓް ކޮއްފައިވާ ޑަމީ ޓެކްސްޓް ކޮޅެކެވެ) ފަހަރެއްގައި ބޯޅައަށް، ކާޓޫނަށް ނުވަތަ ތިމާވެއްޓާމެދުގެ ވިސްނުން މުހިންމުވެދާނެ، މާސް ވިހަވުން އިތުރުވެގެން ދިއުމަކީ އެކަށީގެންވާ ކަމެކެވެ. ފައުލް ކުރުމާ ހަމައަށް އަދި އޭގެ ކުރިންނެވެ. ފުޓްބޯޅައިގެ ކުރިން ފުޓްބޯޅަ ވަރަށް ގިނަ. އެކަމަކު ފުރާވަރުގެ ކުދިންނާއި އެއީ އެކަމަކު ޕްރޮޓީން. އެއީ އަބަދުވެސް އޮންނަ އެއްޗެކެވެ. ކްރާސް އެލިފެންޑް، އޮގް އެޓް އެލިފެންޑް ޕެލެންޓެސްކް.</p>'
        ]);
        \App\Models\Publication::create([
            'id' => '5',
            'created_at' => '2022-07-19 20:41:05',
            'title_en' => 'Item Five',
            'title_dh' => 'އައިޓަމް ފަހެއް',
            'number' => 'DOC/2023/005',
            'main_pdf' => '1',
            'attachment' => '[{"layout":"documentattachmentlayout","key":"9ef0bFPR2yVb8BhQ","attributes":{"title_en":"Attachment One","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u0787\u07ac\u0786\u07ac\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"k0cNXMJiaGWea4ol","attributes":{"title_en":"Attachment Two","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078b\u07ad\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"eRV1uaZqDyaupo1n","attributes":{"title_en":"Attachment Three","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078c\u07a8\u0782\u07ac\u0787\u07b0","attachment":"1"}}]',
            'content_en' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec blandit leo, nec pretium dui. Nam tincidunt porta eros, ut euismod massa iaculis a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui odio, blandit eget hendrerit eleifend, volutpat id felis. Aenean elementum nisl eget tincidunt posuere. In fermentum venenatis nisi in fermentum. Fusce sagittis consequat ultricies. Quisque et metus vel urna dictum aliquet. Morbi tempor, orci aliquam molestie feugiat, ligula urna bibendum velit, cursus vehicula tellus lectus sit amet massa. Pellentesque rutrum placerat feugiat.&nbsp;</p>',
            'content_dh' => '<p>(މި ލިޔުމަކީ ލެޓިން އިން ޓްރާންސްލޭޓް ކޮއްފައިވާ ޑަމީ ޓެކްސްޓް ކޮޅެކެވެ) ފަހަރެއްގައި ބޯޅައަށް، ކާޓޫނަށް ނުވަތަ ތިމާވެއްޓާމެދުގެ ވިސްނުން މުހިންމުވެދާނެ، މާސް ވިހަވުން އިތުރުވެގެން ދިއުމަކީ އެކަށީގެންވާ ކަމެކެވެ. ފައުލް ކުރުމާ ހަމައަށް އަދި އޭގެ ކުރިންނެވެ. ފުޓްބޯޅައިގެ ކުރިން ފުޓްބޯޅަ ވަރަށް ގިނަ. އެކަމަކު ފުރާވަރުގެ ކުދިންނާއި އެއީ އެކަމަކު ޕްރޮޓީން. އެއީ އަބަދުވެސް އޮންނަ އެއްޗެކެވެ. ކްރާސް އެލިފެންޑް، އޮގް އެޓް އެލިފެންޑް ޕެލެންޓެސްކް.</p>'
        ]);
        \App\Models\Publication::create([
            'id' => '6',
            'created_at' => '2022-07-19 20:41:06',
            'title_en' => 'Item Six',
            'title_dh' => 'އައިޓަމް ހައެއް',
            'number' => 'DOC/2023/006',
            'main_pdf' => '1',
            'attachment' => '[{"layout":"documentattachmentlayout","key":"9ef0bFPR2yVb8BhQ","attributes":{"title_en":"Attachment One","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u0787\u07ac\u0786\u07ac\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"k0cNXMJiaGWea4ol","attributes":{"title_en":"Attachment Two","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078b\u07ad\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"eRV1uaZqDyaupo1n","attributes":{"title_en":"Attachment Three","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078c\u07a8\u0782\u07ac\u0787\u07b0","attachment":"1"}}]',
            'content_en' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec blandit leo, nec pretium dui. Nam tincidunt porta eros, ut euismod massa iaculis a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui odio, blandit eget hendrerit eleifend, volutpat id felis. Aenean elementum nisl eget tincidunt posuere. In fermentum venenatis nisi in fermentum. Fusce sagittis consequat ultricies. Quisque et metus vel urna dictum aliquet. Morbi tempor, orci aliquam molestie feugiat, ligula urna bibendum velit, cursus vehicula tellus lectus sit amet massa. Pellentesque rutrum placerat feugiat.&nbsp;</p>',
            'content_dh' => '<p>(މި ލިޔުމަކީ ލެޓިން އިން ޓްރާންސްލޭޓް ކޮއްފައިވާ ޑަމީ ޓެކްސްޓް ކޮޅެކެވެ) ފަހަރެއްގައި ބޯޅައަށް، ކާޓޫނަށް ނުވަތަ ތިމާވެއްޓާމެދުގެ ވިސްނުން މުހިންމުވެދާނެ، މާސް ވިހަވުން އިތުރުވެގެން ދިއުމަކީ އެކަށީގެންވާ ކަމެކެވެ. ފައުލް ކުރުމާ ހަމައަށް އަދި އޭގެ ކުރިންނެވެ. ފުޓްބޯޅައިގެ ކުރިން ފުޓްބޯޅަ ވަރަށް ގިނަ. އެކަމަކު ފުރާވަރުގެ ކުދިންނާއި އެއީ އެކަމަކު ޕްރޮޓީން. އެއީ އަބަދުވެސް އޮންނަ އެއްޗެކެވެ. ކްރާސް އެލިފެންޑް، އޮގް އެޓް އެލިފެންޑް ޕެލެންޓެސްކް.</p>'
        ]);
        \App\Models\Publication::create([
            'id' => '7',
            'created_at' => '2022-07-19 20:41:07',
            'title_en' => 'Item Seven',
            'title_dh' => 'އައިޓަމް ހަތެއް',
            'number' => 'DOC/2023/007',
            'main_pdf' => '1',
            'attachment' => '[{"layout":"documentattachmentlayout","key":"9ef0bFPR2yVb8BhQ","attributes":{"title_en":"Attachment One","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u0787\u07ac\u0786\u07ac\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"k0cNXMJiaGWea4ol","attributes":{"title_en":"Attachment Two","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078b\u07ad\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"eRV1uaZqDyaupo1n","attributes":{"title_en":"Attachment Three","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078c\u07a8\u0782\u07ac\u0787\u07b0","attachment":"1"}}]',
            'content_en' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec blandit leo, nec pretium dui. Nam tincidunt porta eros, ut euismod massa iaculis a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui odio, blandit eget hendrerit eleifend, volutpat id felis. Aenean elementum nisl eget tincidunt posuere. In fermentum venenatis nisi in fermentum. Fusce sagittis consequat ultricies. Quisque et metus vel urna dictum aliquet. Morbi tempor, orci aliquam molestie feugiat, ligula urna bibendum velit, cursus vehicula tellus lectus sit amet massa. Pellentesque rutrum placerat feugiat.&nbsp;</p>',
            'content_dh' => '<p>(މި ލިޔުމަކީ ލެޓިން އިން ޓްރާންސްލޭޓް ކޮއްފައިވާ ޑަމީ ޓެކްސްޓް ކޮޅެކެވެ) ފަހަރެއްގައި ބޯޅައަށް، ކާޓޫނަށް ނުވަތަ ތިމާވެއްޓާމެދުގެ ވިސްނުން މުހިންމުވެދާނެ، މާސް ވިހަވުން އިތުރުވެގެން ދިއުމަކީ އެކަށީގެންވާ ކަމެކެވެ. ފައުލް ކުރުމާ ހަމައަށް އަދި އޭގެ ކުރިންނެވެ. ފުޓްބޯޅައިގެ ކުރިން ފުޓްބޯޅަ ވަރަށް ގިނަ. އެކަމަކު ފުރާވަރުގެ ކުދިންނާއި އެއީ އެކަމަކު ޕްރޮޓީން. އެއީ އަބަދުވެސް އޮންނަ އެއްޗެކެވެ. ކްރާސް އެލިފެންޑް، އޮގް އެޓް އެލިފެންޑް ޕެލެންޓެސްކް.</p>'
        ]);
        \App\Models\Publication::create([
            'id' => '8',
            'created_at' => '2022-07-19 20:41:08',
            'title_en' => 'Item Eight',
            'title_dh' => 'އައިޓަމް އަށެއް',
            'number' => 'DOC/2023/008',
            'main_pdf' => '1',
            'attachment' => '[{"layout":"documentattachmentlayout","key":"9ef0bFPR2yVb8BhQ","attributes":{"title_en":"Attachment One","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u0787\u07ac\u0786\u07ac\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"k0cNXMJiaGWea4ol","attributes":{"title_en":"Attachment Two","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078b\u07ad\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"eRV1uaZqDyaupo1n","attributes":{"title_en":"Attachment Three","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078c\u07a8\u0782\u07ac\u0787\u07b0","attachment":"1"}}]',
            'content_en' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec blandit leo, nec pretium dui. Nam tincidunt porta eros, ut euismod massa iaculis a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui odio, blandit eget hendrerit eleifend, volutpat id felis. Aenean elementum nisl eget tincidunt posuere. In fermentum venenatis nisi in fermentum. Fusce sagittis consequat ultricies. Quisque et metus vel urna dictum aliquet. Morbi tempor, orci aliquam molestie feugiat, ligula urna bibendum velit, cursus vehicula tellus lectus sit amet massa. Pellentesque rutrum placerat feugiat.&nbsp;</p>',
            'content_dh' => '<p>(މި ލިޔުމަކީ ލެޓިން އިން ޓްރާންސްލޭޓް ކޮއްފައިވާ ޑަމީ ޓެކްސްޓް ކޮޅެކެވެ) ފަހަރެއްގައި ބޯޅައަށް، ކާޓޫނަށް ނުވަތަ ތިމާވެއްޓާމެދުގެ ވިސްނުން މުހިންމުވެދާނެ، މާސް ވިހަވުން އިތުރުވެގެން ދިއުމަކީ އެކަށީގެންވާ ކަމެކެވެ. ފައުލް ކުރުމާ ހަމައަށް އަދި އޭގެ ކުރިންނެވެ. ފުޓްބޯޅައިގެ ކުރިން ފުޓްބޯޅަ ވަރަށް ގިނަ. އެކަމަކު ފުރާވަރުގެ ކުދިންނާއި އެއީ އެކަމަކު ޕްރޮޓީން. އެއީ އަބަދުވެސް އޮންނަ އެއްޗެކެވެ. ކްރާސް އެލިފެންޑް، އޮގް އެޓް އެލިފެންޑް ޕެލެންޓެސްކް.</p>'
        ]);
        \App\Models\Publication::create([
            'id' => '9',
            'created_at' => '2022-07-19 20:41:09',
            'title_en' => 'Item Nine',
            'title_dh' => 'އައިޓަމް ނުވައެއް',
            'number' => 'DOC/2023/009',
            'main_pdf' => '1',
            'attachment' => '[{"layout":"documentattachmentlayout","key":"9ef0bFPR2yVb8BhQ","attributes":{"title_en":"Attachment One","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u0787\u07ac\u0786\u07ac\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"k0cNXMJiaGWea4ol","attributes":{"title_en":"Attachment Two","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078b\u07ad\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"eRV1uaZqDyaupo1n","attributes":{"title_en":"Attachment Three","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078c\u07a8\u0782\u07ac\u0787\u07b0","attachment":"1"}}]',
            'content_en' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec blandit leo, nec pretium dui. Nam tincidunt porta eros, ut euismod massa iaculis a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui odio, blandit eget hendrerit eleifend, volutpat id felis. Aenean elementum nisl eget tincidunt posuere. In fermentum venenatis nisi in fermentum. Fusce sagittis consequat ultricies. Quisque et metus vel urna dictum aliquet. Morbi tempor, orci aliquam molestie feugiat, ligula urna bibendum velit, cursus vehicula tellus lectus sit amet massa. Pellentesque rutrum placerat feugiat.&nbsp;</p>',
            'content_dh' => '<p>(މި ލިޔުމަކީ ލެޓިން އިން ޓްރާންސްލޭޓް ކޮއްފައިވާ ޑަމީ ޓެކްސްޓް ކޮޅެކެވެ) ފަހަރެއްގައި ބޯޅައަށް، ކާޓޫނަށް ނުވަތަ ތިމާވެއްޓާމެދުގެ ވިސްނުން މުހިންމުވެދާނެ، މާސް ވިހަވުން އިތުރުވެގެން ދިއުމަކީ އެކަށީގެންވާ ކަމެކެވެ. ފައުލް ކުރުމާ ހަމައަށް އަދި އޭގެ ކުރިންނެވެ. ފުޓްބޯޅައިގެ ކުރިން ފުޓްބޯޅަ ވަރަށް ގިނަ. އެކަމަކު ފުރާވަރުގެ ކުދިންނާއި އެއީ އެކަމަކު ޕްރޮޓީން. އެއީ އަބަދުވެސް އޮންނަ އެއްޗެކެވެ. ކްރާސް އެލިފެންޑް، އޮގް އެޓް އެލިފެންޑް ޕެލެންޓެސްކް.</p>'
        ]);
        \App\Models\Publication::create([
            'id' => '10',
            'created_at' => '2022-07-19 20:41:10',
            'title_en' => 'Item Ten',
            'title_dh' => 'އައިޓަމް ދިހައެއް',
            'number' => 'DOC/2023/010',
            'main_pdf' => '1',
            'attachment' => '[{"layout":"documentattachmentlayout","key":"9ef0bFPR2yVb8BhQ","attributes":{"title_en":"Attachment One","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u0787\u07ac\u0786\u07ac\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"k0cNXMJiaGWea4ol","attributes":{"title_en":"Attachment Two","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078b\u07ad\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"eRV1uaZqDyaupo1n","attributes":{"title_en":"Attachment Three","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078c\u07a8\u0782\u07ac\u0787\u07b0","attachment":"1"}}]',
            'content_en' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec blandit leo, nec pretium dui. Nam tincidunt porta eros, ut euismod massa iaculis a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui odio, blandit eget hendrerit eleifend, volutpat id felis. Aenean elementum nisl eget tincidunt posuere. In fermentum venenatis nisi in fermentum. Fusce sagittis consequat ultricies. Quisque et metus vel urna dictum aliquet. Morbi tempor, orci aliquam molestie feugiat, ligula urna bibendum velit, cursus vehicula tellus lectus sit amet massa. Pellentesque rutrum placerat feugiat.&nbsp;</p>',
            'content_dh' => '<p>(މި ލިޔުމަކީ ލެޓިން އިން ޓްރާންސްލޭޓް ކޮއްފައިވާ ޑަމީ ޓެކްސްޓް ކޮޅެކެވެ) ފަހަރެއްގައި ބޯޅައަށް، ކާޓޫނަށް ނުވަތަ ތިމާވެއްޓާމެދުގެ ވިސްނުން މުހިންމުވެދާނެ، މާސް ވިހަވުން އިތުރުވެގެން ދިއުމަކީ އެކަށީގެންވާ ކަމެކެވެ. ފައުލް ކުރުމާ ހަމައަށް އަދި އޭގެ ކުރިންނެވެ. ފުޓްބޯޅައިގެ ކުރިން ފުޓްބޯޅަ ވަރަށް ގިނަ. އެކަމަކު ފުރާވަރުގެ ކުދިންނާއި އެއީ އެކަމަކު ޕްރޮޓީން. އެއީ އަބަދުވެސް އޮންނަ އެއްޗެކެވެ. ކްރާސް އެލިފެންޑް، އޮގް އެޓް އެލިފެންޑް ޕެލެންޓެސްކް.</p>'
        ]);
        \App\Models\Publication::create([
            'id' => '11',
            'created_at' => '2022-07-19 20:41:11',
            'title_en' => 'Item Eleven',
            'title_dh' => 'އައިޓަމް އެގާރަ',
            'number' => 'DOC/2023/011',
            'main_pdf' => '1',
            'attachment' => '[{"layout":"documentattachmentlayout","key":"9ef0bFPR2yVb8BhQ","attributes":{"title_en":"Attachment One","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u0787\u07ac\u0786\u07ac\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"k0cNXMJiaGWea4ol","attributes":{"title_en":"Attachment Two","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078b\u07ad\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"eRV1uaZqDyaupo1n","attributes":{"title_en":"Attachment Three","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078c\u07a8\u0782\u07ac\u0787\u07b0","attachment":"1"}}]',
            'content_en' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec blandit leo, nec pretium dui. Nam tincidunt porta eros, ut euismod massa iaculis a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui odio, blandit eget hendrerit eleifend, volutpat id felis. Aenean elementum nisl eget tincidunt posuere. In fermentum venenatis nisi in fermentum. Fusce sagittis consequat ultricies. Quisque et metus vel urna dictum aliquet. Morbi tempor, orci aliquam molestie feugiat, ligula urna bibendum velit, cursus vehicula tellus lectus sit amet massa. Pellentesque rutrum placerat feugiat.&nbsp;</p>',
            'content_dh' => '<p>(މި ލިޔުމަކީ ލެޓިން އިން ޓްރާންސްލޭޓް ކޮއްފައިވާ ޑަމީ ޓެކްސްޓް ކޮޅެކެވެ) ފަހަރެއްގައި ބޯޅައަށް، ކާޓޫނަށް ނުވަތަ ތިމާވެއްޓާމެދުގެ ވިސްނުން މުހިންމުވެދާނެ، މާސް ވިހަވުން އިތުރުވެގެން ދިއުމަކީ އެކަށީގެންވާ ކަމެކެވެ. ފައުލް ކުރުމާ ހަމައަށް އަދި އޭގެ ކުރިންނެވެ. ފުޓްބޯޅައިގެ ކުރިން ފުޓްބޯޅަ ވަރަށް ގިނަ. އެކަމަކު ފުރާވަރުގެ ކުދިންނާއި އެއީ އެކަމަކު ޕްރޮޓީން. އެއީ އަބަދުވެސް އޮންނަ އެއްޗެކެވެ. ކްރާސް އެލިފެންޑް، އޮގް އެޓް އެލިފެންޑް ޕެލެންޓެސްކް.</p>'
        ]);
        \App\Models\Publication::create([
            'id' => '12',
            'created_at' => '2022-07-19 20:41:12',
            'title_en' => 'Item Twelve',
            'title_dh' => 'އައިޓަމް ބާރަ',
            'number' => 'DOC/2023/012',
            'main_pdf' => '1',
            'attachment' => '[{"layout":"documentattachmentlayout","key":"9ef0bFPR2yVb8BhQ","attributes":{"title_en":"Attachment One","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u0787\u07ac\u0786\u07ac\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"k0cNXMJiaGWea4ol","attributes":{"title_en":"Attachment Two","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078b\u07ad\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"eRV1uaZqDyaupo1n","attributes":{"title_en":"Attachment Three","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078c\u07a8\u0782\u07ac\u0787\u07b0","attachment":"1"}}]',
            'content_en' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec blandit leo, nec pretium dui. Nam tincidunt porta eros, ut euismod massa iaculis a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui odio, blandit eget hendrerit eleifend, volutpat id felis. Aenean elementum nisl eget tincidunt posuere. In fermentum venenatis nisi in fermentum. Fusce sagittis consequat ultricies. Quisque et metus vel urna dictum aliquet. Morbi tempor, orci aliquam molestie feugiat, ligula urna bibendum velit, cursus vehicula tellus lectus sit amet massa. Pellentesque rutrum placerat feugiat.&nbsp;</p>',
            'content_dh' => '<p>(މި ލިޔުމަކީ ލެޓިން އިން ޓްރާންސްލޭޓް ކޮއްފައިވާ ޑަމީ ޓެކްސްޓް ކޮޅެކެވެ) ފަހަރެއްގައި ބޯޅައަށް، ކާޓޫނަށް ނުވަތަ ތިމާވެއްޓާމެދުގެ ވިސްނުން މުހިންމުވެދާނެ، މާސް ވިހަވުން އިތުރުވެގެން ދިއުމަކީ އެކަށީގެންވާ ކަމެކެވެ. ފައުލް ކުރުމާ ހަމައަށް އަދި އޭގެ ކުރިންނެވެ. ފުޓްބޯޅައިގެ ކުރިން ފުޓްބޯޅަ ވަރަށް ގިނަ. އެކަމަކު ފުރާވަރުގެ ކުދިންނާއި އެއީ އެކަމަކު ޕްރޮޓީން. އެއީ އަބަދުވެސް އޮންނަ އެއްޗެކެވެ. ކްރާސް އެލިފެންޑް، އޮގް އެޓް އެލިފެންޑް ޕެލެންޓެސްކް.</p>'
        ]);
        \App\Models\Publication::create([
            'id' => '13',
            'created_at' => '2022-07-19 20:41:13',
            'title_en' => 'Item Thirteen',
            'title_dh' => 'އައިޓަމް ތޭރަ',
            'number' => 'DOC/2023/013',
            'main_pdf' => '1',
            'attachment' => '[{"layout":"documentattachmentlayout","key":"9ef0bFPR2yVb8BhQ","attributes":{"title_en":"Attachment One","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u0787\u07ac\u0786\u07ac\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"k0cNXMJiaGWea4ol","attributes":{"title_en":"Attachment Two","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078b\u07ad\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"eRV1uaZqDyaupo1n","attributes":{"title_en":"Attachment Three","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078c\u07a8\u0782\u07ac\u0787\u07b0","attachment":"1"}}]',
            'content_en' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec blandit leo, nec pretium dui. Nam tincidunt porta eros, ut euismod massa iaculis a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui odio, blandit eget hendrerit eleifend, volutpat id felis. Aenean elementum nisl eget tincidunt posuere. In fermentum venenatis nisi in fermentum. Fusce sagittis consequat ultricies. Quisque et metus vel urna dictum aliquet. Morbi tempor, orci aliquam molestie feugiat, ligula urna bibendum velit, cursus vehicula tellus lectus sit amet massa. Pellentesque rutrum placerat feugiat.&nbsp;</p>',
            'content_dh' => '<p>(މި ލިޔުމަކީ ލެޓިން އިން ޓްރާންސްލޭޓް ކޮއްފައިވާ ޑަމީ ޓެކްސްޓް ކޮޅެކެވެ) ފަހަރެއްގައި ބޯޅައަށް، ކާޓޫނަށް ނުވަތަ ތިމާވެއްޓާމެދުގެ ވިސްނުން މުހިންމުވެދާނެ، މާސް ވިހަވުން އިތުރުވެގެން ދިއުމަކީ އެކަށީގެންވާ ކަމެކެވެ. ފައުލް ކުރުމާ ހަމައަށް އަދި އޭގެ ކުރިންނެވެ. ފުޓްބޯޅައިގެ ކުރިން ފުޓްބޯޅަ ވަރަށް ގިނަ. އެކަމަކު ފުރާވަރުގެ ކުދިންނާއި އެއީ އެކަމަކު ޕްރޮޓީން. އެއީ އަބަދުވެސް އޮންނަ އެއްޗެކެވެ. ކްރާސް އެލިފެންޑް، އޮގް އެޓް އެލިފެންޑް ޕެލެންޓެސްކް.</p>'
        ]);
        \App\Models\Publication::create([
            'id' => '14',
            'created_at' => '2022-07-19 20:41:14',
            'title_en' => 'Item Fourteen',
            'title_dh' => 'އައިޓަމް ސާދަ',
            'number' => 'DOC/2023/014',
            'main_pdf' => '1',
            'attachment' => '[{"layout":"documentattachmentlayout","key":"9ef0bFPR2yVb8BhQ","attributes":{"title_en":"Attachment One","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u0787\u07ac\u0786\u07ac\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"k0cNXMJiaGWea4ol","attributes":{"title_en":"Attachment Two","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078b\u07ad\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"eRV1uaZqDyaupo1n","attributes":{"title_en":"Attachment Three","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078c\u07a8\u0782\u07ac\u0787\u07b0","attachment":"1"}}]',
            'content_en' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec blandit leo, nec pretium dui. Nam tincidunt porta eros, ut euismod massa iaculis a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui odio, blandit eget hendrerit eleifend, volutpat id felis. Aenean elementum nisl eget tincidunt posuere. In fermentum venenatis nisi in fermentum. Fusce sagittis consequat ultricies. Quisque et metus vel urna dictum aliquet. Morbi tempor, orci aliquam molestie feugiat, ligula urna bibendum velit, cursus vehicula tellus lectus sit amet massa. Pellentesque rutrum placerat feugiat.&nbsp;</p>',
            'content_dh' => '<p>(މި ލިޔުމަކީ ލެޓިން އިން ޓްރާންސްލޭޓް ކޮއްފައިވާ ޑަމީ ޓެކްސްޓް ކޮޅެކެވެ) ފަހަރެއްގައި ބޯޅައަށް، ކާޓޫނަށް ނުވަތަ ތިމާވެއްޓާމެދުގެ ވިސްނުން މުހިންމުވެދާނެ، މާސް ވިހަވުން އިތުރުވެގެން ދިއުމަކީ އެކަށީގެންވާ ކަމެކެވެ. ފައުލް ކުރުމާ ހަމައަށް އަދި އޭގެ ކުރިންނެވެ. ފުޓްބޯޅައިގެ ކުރިން ފުޓްބޯޅަ ވަރަށް ގިނަ. އެކަމަކު ފުރާވަރުގެ ކުދިންނާއި އެއީ އެކަމަކު ޕްރޮޓީން. އެއީ އަބަދުވެސް އޮންނަ އެއްޗެކެވެ. ކްރާސް އެލިފެންޑް، އޮގް އެޓް އެލިފެންޑް ޕެލެންޓެސްކް.</p>'
        ]);
        \App\Models\Publication::create([
            'id' => '15',
            'created_at' => '2022-07-19 20:41:15',
            'title_en' => 'Item Fifteen',
            'title_dh' => 'އައިޓަމް ފަނަރަ',
            'number' => 'DOC/2023/015',
            'main_pdf' => '1',
            'attachment' => '[{"layout":"documentattachmentlayout","key":"9ef0bFPR2yVb8BhQ","attributes":{"title_en":"Attachment One","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u0787\u07ac\u0786\u07ac\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"k0cNXMJiaGWea4ol","attributes":{"title_en":"Attachment Two","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078b\u07ad\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"eRV1uaZqDyaupo1n","attributes":{"title_en":"Attachment Three","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078c\u07a8\u0782\u07ac\u0787\u07b0","attachment":"1"}}]',
            'content_en' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec blandit leo, nec pretium dui. Nam tincidunt porta eros, ut euismod massa iaculis a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui odio, blandit eget hendrerit eleifend, volutpat id felis. Aenean elementum nisl eget tincidunt posuere. In fermentum venenatis nisi in fermentum. Fusce sagittis consequat ultricies. Quisque et metus vel urna dictum aliquet. Morbi tempor, orci aliquam molestie feugiat, ligula urna bibendum velit, cursus vehicula tellus lectus sit amet massa. Pellentesque rutrum placerat feugiat.&nbsp;</p>',
            'content_dh' => '<p>(މި ލިޔުމަކީ ލެޓިން އިން ޓްރާންސްލޭޓް ކޮއްފައިވާ ޑަމީ ޓެކްސްޓް ކޮޅެކެވެ) ފަހަރެއްގައި ބޯޅައަށް، ކާޓޫނަށް ނުވަތަ ތިމާވެއްޓާމެދުގެ ވިސްނުން މުހިންމުވެދާނެ، މާސް ވިހަވުން އިތުރުވެގެން ދިއުމަކީ އެކަށީގެންވާ ކަމެކެވެ. ފައުލް ކުރުމާ ހަމައަށް އަދި އޭގެ ކުރިންނެވެ. ފުޓްބޯޅައިގެ ކުރިން ފުޓްބޯޅަ ވަރަށް ގިނަ. އެކަމަކު ފުރާވަރުގެ ކުދިންނާއި އެއީ އެކަމަކު ޕްރޮޓީން. އެއީ އަބަދުވެސް އޮންނަ އެއްޗެކެވެ. ކްރާސް އެލިފެންޑް، އޮގް އެޓް އެލިފެންޑް ޕެލެންޓެސްކް.</p>'
        ]);
        \App\Models\Publication::create([
            'id' => '16',
            'created_at' => '2022-07-19 20:41:16',
            'title_en' => 'Item Sixteen',
            'title_dh' => 'އައިޓަމް ސޯޅަ',
            'number' => 'DOC/2023/016',
            'main_pdf' => '1',
            'attachment' => '[{"layout":"documentattachmentlayout","key":"9ef0bFPR2yVb8BhQ","attributes":{"title_en":"Attachment One","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u0787\u07ac\u0786\u07ac\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"k0cNXMJiaGWea4ol","attributes":{"title_en":"Attachment Two","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078b\u07ad\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"eRV1uaZqDyaupo1n","attributes":{"title_en":"Attachment Three","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078c\u07a8\u0782\u07ac\u0787\u07b0","attachment":"1"}}]',
            'content_en' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec blandit leo, nec pretium dui. Nam tincidunt porta eros, ut euismod massa iaculis a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui odio, blandit eget hendrerit eleifend, volutpat id felis. Aenean elementum nisl eget tincidunt posuere. In fermentum venenatis nisi in fermentum. Fusce sagittis consequat ultricies. Quisque et metus vel urna dictum aliquet. Morbi tempor, orci aliquam molestie feugiat, ligula urna bibendum velit, cursus vehicula tellus lectus sit amet massa. Pellentesque rutrum placerat feugiat.&nbsp;</p>',
            'content_dh' => '<p>(މި ލިޔުމަކީ ލެޓިން އިން ޓްރާންސްލޭޓް ކޮއްފައިވާ ޑަމީ ޓެކްސްޓް ކޮޅެކެވެ) ފަހަރެއްގައި ބޯޅައަށް، ކާޓޫނަށް ނުވަތަ ތިމާވެއްޓާމެދުގެ ވިސްނުން މުހިންމުވެދާނެ، މާސް ވިހަވުން އިތުރުވެގެން ދިއުމަކީ އެކަށީގެންވާ ކަމެކެވެ. ފައުލް ކުރުމާ ހަމައަށް އަދި އޭގެ ކުރިންނެވެ. ފުޓްބޯޅައިގެ ކުރިން ފުޓްބޯޅަ ވަރަށް ގިނަ. އެކަމަކު ފުރާވަރުގެ ކުދިންނާއި އެއީ އެކަމަކު ޕްރޮޓީން. އެއީ އަބަދުވެސް އޮންނަ އެއްޗެކެވެ. ކްރާސް އެލިފެންޑް، އޮގް އެޓް އެލިފެންޑް ޕެލެންޓެސްކް.</p>'
        ]);
        \App\Models\Publication::create([
            'id' => '17',
            'created_at' => '2022-07-19 20:41:17',
            'title_en' => 'Item Seventeen',
            'title_dh' => 'އައިޓަމް ސަތާރަ',
            'number' => 'DOC/2023/017',
            'main_pdf' => '1',
            'attachment' => '[{"layout":"documentattachmentlayout","key":"9ef0bFPR2yVb8BhQ","attributes":{"title_en":"Attachment One","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u0787\u07ac\u0786\u07ac\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"k0cNXMJiaGWea4ol","attributes":{"title_en":"Attachment Two","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078b\u07ad\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"eRV1uaZqDyaupo1n","attributes":{"title_en":"Attachment Three","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078c\u07a8\u0782\u07ac\u0787\u07b0","attachment":"1"}}]',
            'content_en' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec blandit leo, nec pretium dui. Nam tincidunt porta eros, ut euismod massa iaculis a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui odio, blandit eget hendrerit eleifend, volutpat id felis. Aenean elementum nisl eget tincidunt posuere. In fermentum venenatis nisi in fermentum. Fusce sagittis consequat ultricies. Quisque et metus vel urna dictum aliquet. Morbi tempor, orci aliquam molestie feugiat, ligula urna bibendum velit, cursus vehicula tellus lectus sit amet massa. Pellentesque rutrum placerat feugiat.&nbsp;</p>',
            'content_dh' => '<p>(މި ލިޔުމަކީ ލެޓިން އިން ޓްރާންސްލޭޓް ކޮއްފައިވާ ޑަމީ ޓެކްސްޓް ކޮޅެކެވެ) ފަހަރެއްގައި ބޯޅައަށް، ކާޓޫނަށް ނުވަތަ ތިމާވެއްޓާމެދުގެ ވިސްނުން މުހިންމުވެދާނެ، މާސް ވިހަވުން އިތުރުވެގެން ދިއުމަކީ އެކަށީގެންވާ ކަމެކެވެ. ފައުލް ކުރުމާ ހަމައަށް އަދި އޭގެ ކުރިންނެވެ. ފުޓްބޯޅައިގެ ކުރިން ފުޓްބޯޅަ ވަރަށް ގިނަ. އެކަމަކު ފުރާވަރުގެ ކުދިންނާއި އެއީ އެކަމަކު ޕްރޮޓީން. އެއީ އަބަދުވެސް އޮންނަ އެއްޗެކެވެ. ކްރާސް އެލިފެންޑް، އޮގް އެޓް އެލިފެންޑް ޕެލެންޓެސްކް.</p>'
        ]);
        \App\Models\Publication::create([
            'id' => '18',
            'created_at' => '2022-07-19 20:41:18',
            'title_en' => 'Item Eighteen',
            'title_dh' => 'އައިޓަމް އަށާރަ',
            'number' => 'DOC/2023/018',
            'main_pdf' => '1',
            'attachment' => '[{"layout":"documentattachmentlayout","key":"9ef0bFPR2yVb8BhQ","attributes":{"title_en":"Attachment One","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u0787\u07ac\u0786\u07ac\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"k0cNXMJiaGWea4ol","attributes":{"title_en":"Attachment Two","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078b\u07ad\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"eRV1uaZqDyaupo1n","attributes":{"title_en":"Attachment Three","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078c\u07a8\u0782\u07ac\u0787\u07b0","attachment":"1"}}]',
            'content_en' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec blandit leo, nec pretium dui. Nam tincidunt porta eros, ut euismod massa iaculis a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui odio, blandit eget hendrerit eleifend, volutpat id felis. Aenean elementum nisl eget tincidunt posuere. In fermentum venenatis nisi in fermentum. Fusce sagittis consequat ultricies. Quisque et metus vel urna dictum aliquet. Morbi tempor, orci aliquam molestie feugiat, ligula urna bibendum velit, cursus vehicula tellus lectus sit amet massa. Pellentesque rutrum placerat feugiat.&nbsp;</p>',
            'content_dh' => '<p>(މި ލިޔުމަކީ ލެޓިން އިން ޓްރާންސްލޭޓް ކޮއްފައިވާ ޑަމީ ޓެކްސްޓް ކޮޅެކެވެ) ފަހަރެއްގައި ބޯޅައަށް، ކާޓޫނަށް ނުވަތަ ތިމާވެއްޓާމެދުގެ ވިސްނުން މުހިންމުވެދާނެ، މާސް ވިހަވުން އިތުރުވެގެން ދިއުމަކީ އެކަށީގެންވާ ކަމެކެވެ. ފައުލް ކުރުމާ ހަމައަށް އަދި އޭގެ ކުރިންނެވެ. ފުޓްބޯޅައިގެ ކުރިން ފުޓްބޯޅަ ވަރަށް ގިނަ. އެކަމަކު ފުރާވަރުގެ ކުދިންނާއި އެއީ އެކަމަކު ޕްރޮޓީން. އެއީ އަބަދުވެސް އޮންނަ އެއްޗެކެވެ. ކްރާސް އެލިފެންޑް، އޮގް އެޓް އެލިފެންޑް ޕެލެންޓެސްކް.</p>'
        ]);
        \App\Models\Publication::create([
            'id' => '19',
            'created_at' => '2022-07-19 20:41:19',
            'title_en' => 'Item Nineteen',
            'title_dh' => 'އައިޓަމް ނަވާރަ',
            'number' => 'DOC/2023/019',
            'main_pdf' => '1',
            'attachment' => '[{"layout":"documentattachmentlayout","key":"9ef0bFPR2yVb8BhQ","attributes":{"title_en":"Attachment One","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u0787\u07ac\u0786\u07ac\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"k0cNXMJiaGWea4ol","attributes":{"title_en":"Attachment Two","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078b\u07ad\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"eRV1uaZqDyaupo1n","attributes":{"title_en":"Attachment Three","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078c\u07a8\u0782\u07ac\u0787\u07b0","attachment":"1"}}]',
            'content_en' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec blandit leo, nec pretium dui. Nam tincidunt porta eros, ut euismod massa iaculis a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui odio, blandit eget hendrerit eleifend, volutpat id felis. Aenean elementum nisl eget tincidunt posuere. In fermentum venenatis nisi in fermentum. Fusce sagittis consequat ultricies. Quisque et metus vel urna dictum aliquet. Morbi tempor, orci aliquam molestie feugiat, ligula urna bibendum velit, cursus vehicula tellus lectus sit amet massa. Pellentesque rutrum placerat feugiat.&nbsp;</p>',
            'content_dh' => '<p>(މި ލިޔުމަކީ ލެޓިން އިން ޓްރާންސްލޭޓް ކޮއްފައިވާ ޑަމީ ޓެކްސްޓް ކޮޅެކެވެ) ފަހަރެއްގައި ބޯޅައަށް، ކާޓޫނަށް ނުވަތަ ތިމާވެއްޓާމެދުގެ ވިސްނުން މުހިންމުވެދާނެ، މާސް ވިހަވުން އިތުރުވެގެން ދިއުމަކީ އެކަށީގެންވާ ކަމެކެވެ. ފައުލް ކުރުމާ ހަމައަށް އަދި އޭގެ ކުރިންނެވެ. ފުޓްބޯޅައިގެ ކުރިން ފުޓްބޯޅަ ވަރަށް ގިނަ. އެކަމަކު ފުރާވަރުގެ ކުދިންނާއި އެއީ އެކަމަކު ޕްރޮޓީން. އެއީ އަބަދުވެސް އޮންނަ އެއްޗެކެވެ. ކްރާސް އެލިފެންޑް، އޮގް އެޓް އެލިފެންޑް ޕެލެންޓެސްކް.</p>'
        ]);
        \App\Models\Publication::create([
            'id' => '20',
            'created_at' => '2022-07-19 20:41:20',
            'title_en' => 'Item Twenty',
            'title_dh' => 'އައިޓަމް ވިހި',
            'number' => 'DOC/2023/020',
            'main_pdf' => '1',
            'attachment' => '[{"layout":"documentattachmentlayout","key":"9ef0bFPR2yVb8BhQ","attributes":{"title_en":"Attachment One","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u0787\u07ac\u0786\u07ac\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"k0cNXMJiaGWea4ol","attributes":{"title_en":"Attachment Two","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078b\u07ad\u0787\u07b0","attachment":"1"}},{"layout":"documentattachmentlayout","key":"eRV1uaZqDyaupo1n","attributes":{"title_en":"Attachment Three","title_dh":"\u0787\u07ac\u0793\u07ad\u0797\u07b0\u0789\u07a6\u0782\u07b0\u0793\u07b0 \u078c\u07a8\u0782\u07ac\u0787\u07b0","attachment":"1"}}]',
            'content_en' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec blandit leo, nec pretium dui. Nam tincidunt porta eros, ut euismod massa iaculis a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui odio, blandit eget hendrerit eleifend, volutpat id felis. Aenean elementum nisl eget tincidunt posuere. In fermentum venenatis nisi in fermentum. Fusce sagittis consequat ultricies. Quisque et metus vel urna dictum aliquet. Morbi tempor, orci aliquam molestie feugiat, ligula urna bibendum velit, cursus vehicula tellus lectus sit amet massa. Pellentesque rutrum placerat feugiat.&nbsp;</p>',
            'content_dh' => '<p>(މި ލިޔުމަކީ ލެޓިން އިން ޓްރާންސްލޭޓް ކޮއްފައިވާ ޑަމީ ޓެކްސްޓް ކޮޅެކެވެ) ފަހަރެއްގައި ބޯޅައަށް، ކާޓޫނަށް ނުވަތަ ތިމާވެއްޓާމެދުގެ ވިސްނުން މުހިންމުވެދާނެ، މާސް ވިހަވުން އިތުރުވެގެން ދިއުމަކީ އެކަށީގެންވާ ކަމެކެވެ. ފައުލް ކުރުމާ ހަމައަށް އަދި އޭގެ ކުރިންނެވެ. ފުޓްބޯޅައިގެ ކުރިން ފުޓްބޯޅަ ވަރަށް ގިނަ. އެކަމަކު ފުރާވަރުގެ ކުދިންނާއި އެއީ އެކަމަކު ޕްރޮޓީން. އެއީ އަބަދުވެސް އޮންނަ އެއްޗެކެވެ. ކްރާސް އެލިފެންޑް، އޮގް އެޓް އެލިފެންޑް ޕެލެންޓެސްކް.</p>'
        ]);
        
    }
}
