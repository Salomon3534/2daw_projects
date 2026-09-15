marks = [0.0, 0.0, 0.0]

for i in range(3):
    marks[i] = float(input("Insert your mark:\n"))

mark_exam_final = float(input("Insert what mark you've got in the final exam:\n"))
mark_project_final = float(input("Insert what mark you've got in the final project:\n"))


def get_final_mark():
    points_mediam = (sum(marks) / len(marks)) * 0.55
    points_exam_final = mark_exam_final * 0.3
    points_project = mark_project_final * 0.15

    return points_mediam + points_exam_final + points_project


mark_final = get_final_mark()
print("Final mark:", mark_final)