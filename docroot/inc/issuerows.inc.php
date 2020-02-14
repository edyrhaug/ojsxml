<?php


$xmlWriter->writeAttribute('published', '1');

    $xmlWriter->startElement("issue_identification");
        if($r['volume'] != ""){
        $xmlWriter->startElement("volume");
        $xmlWriter->writeRaw($r['volume']);
        $xmlWriter->endElement();
        }
        
        $xmlWriter->startElement("number");
        $xmlWriter->writeRaw($r['issue']);
        $xmlWriter->endElement();
        $xmlWriter->startElement("year");
        $xmlWriter->writeRaw($r['year']);
        $xmlWriter->endElement();
        $xmlWriter->startElement("title");
        $xmlWriter->writeRaw(xmlFormat($r['issueTitle']));
        $xmlWriter->endElement();
    $xmlWriter->endElement();
    $xmlWriter->startElement("date_published");
        $xmlWriter->writeRaw( date("Y-m-d",strtotime($r['datePublished'])));
    $xmlWriter->endElement();
