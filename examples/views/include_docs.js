function (doc, meta) {
    if(doc.created)
    {
        emit(doc.created, null);
    }
}