<div class="form-group">
    <label for="title">Título</label>
    <input type="text" class="form-control" name="title" id="title" value="{{ old('title', $categoria->title)}}">
  </div>

  <div class="form-group">
    <label for="url_clean">Url Limpia</label>
    <input type="text" class="form-control" name="url_clean" id="url_clean" value="{{ old('url_clean', $categoria->url_clean)}}">
  </div>

    <input type="submit" value="Enviar" class="btn btn-primary">
    
</form>
