class ExceptionCalories(Exception):
    def __init__(self, msg, err_value):
        super().__init__(msg)
        self.err_value = err_value