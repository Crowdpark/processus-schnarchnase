/**
 *
 * don't create this kind of views, it's bad practice use instead include_docs
 * is only a example.
 *
 */
function (doc, meta) {
    if(doc.lastname)
    {
        emit(meta.id, doc);
    }

}